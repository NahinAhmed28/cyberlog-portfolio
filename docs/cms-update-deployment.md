# CMS update deployment

Run on the target installation after deploying the code:

```sh
php artisan migrate --force
php artisan optimize:clear
php artisan storage:link
php artisan cms:repair-media
php artisan cms:repair-media --apply
```

The new migrations extend inquiries, add Site settings, and map existing pages to ordered section references. They retain existing content records and templates. No production content should be reseeded. The upload route provides a fallback for `storage/uploads/...` when symlinks are unavailable; the public disk must be writable and the server must route missing files to Laravel.

The repair command is a dry run unless `--apply` is provided. It repairs only an unambiguous matching filename found on disk and records content changes in the audit table. Files absent from the server cannot be reconstructed: restore them from backup or select/upload a replacement. The workspace scan found zero broken references; the production-only jaago record is not present locally.

## Mail

Use the existing mail configuration, with actual SMTP credentials supplied on the server:

```dotenv
MAIL_MAILER=smtp
MAIL_SCHEME=smtp
MAIL_HOST=smtp.your-provider.example
MAIL_PORT=587
MAIL_USERNAME=your-smtp-user
MAIL_PASSWORD=your-smtp-password
MAIL_FROM_ADDRESS=info@cyberlog.bd
MAIL_FROM_NAME="Cyberlog Limited"
INQUIRY_NOTIFICATION_EMAIL=info@cyberlog.bd
```

Use `MAIL_SCHEME=smtps` and port 465 if your provider requires implicit TLS. The recipient can be overridden in Admin > Site settings. Run `php artisan config:clear` after changing environment values. Notifications send synchronously: no queue worker is required. A saved inquiry remains available in the admin if SMTP fails, and the visitor sees a message explaining this. `notified_at` indicates transport acceptance, not guaranteed inbox delivery. Local tests fake SMTP; a production delivery test is still required. A log mailer does not deliver email externally.

## Editing

Navigation supports insertion points and drag ordering within each menu. Create service pages from Navigation, add sections, and insert the page link at the desired menu position. Existing service URLs remain reserved.

The section library includes hero, logos, cards, stats, comparison, steps, testimonials, video/text, CTA, FAQ and rich text. New sections have independent editable data. Sections support hide/show, ordering, duplication and trash/restore. Legacy repeatable items support duplication, visibility, ordering and trash/restore. Form fields include contextual labels, helper text and website links. VAPT has nine section panels plus separate SEO settings. Existing section content continues to use the established schemas and templates.

Legacy section copies intentionally reference the same content records; editing one changes both copies. They are not fully independent copies of interactive components. The legacy templates have not been replaced with a complete independent component system. Duplicated legacy interactive widgets need a separate component migration before independent configuration and behavior can be guaranteed. New library sections have independent copies.

## Verification

Automated coverage includes persistence and notifications, SMTP failure, validation, spam limiting, inquiry administration/CSV, uploads without symlinks, media selection, menu insertion/reordering, dynamic services, section controls, and unchanged legacy rendering after migration. A static snapshot test predating the existing Career video migration still expects a Play Video link and fails; the migration-specific parity test passes. Desktop/mobile visual browser verification was unavailable in this environment. Real SMTP delivery and the production jaago upload need verification on the target server.
