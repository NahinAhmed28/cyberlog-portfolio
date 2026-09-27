# Page-based portfolio administration

The sidebar contains the 16 public portfolio pages, Navigation, Footer, Site settings, Media library and Inquiries. Each page editor groups its text, images, videos and cards into expandable sections. Archived layouts remain available within their owning page. Navigation has a separate editor for parent dropdowns, child links, buttons, dividers, visibility and order. Its branding editor manages the logo and mobile menu label. Footer has its own page editor.

## Eloquent structure

| Model | Table | Responsibility |
| --- | --- | --- |
| Page | pages | Public pages and the navigation/footer/settings areas |
| PageSection | page_sections | Section identity and archive state |
| PageContent | page_contents | Typed JSON content, order, visibility and soft deletion |
| Page ↔ PageSection | page_page_section | Shared sections without duplicated content |
| NavigationItem | navigation_items | Navbar parents and submenu children |
| MediaAsset | media_assets | Default images/videos and uploads |
| ContentAudit | content_audits | Editor history and polymorphic content references |
| Inquiry | inquiries | Contact submissions |

The abstract ContentEntry shares serialization and auditing behavior. It no longer selects separate tables. Section-scoped PageContent queries prevent one section's editor from changing another section's records. The field definitions remain in `config/content_modules.php`; default values live in page seeders, not the views or schemas.

## Page ownership and defaults

Each seeder below contains its page's original copy and media paths. Shared records are linked to multiple pages. NavigationSeeder initializes the menu tree from the original navigation defaults and preserves subsequent edits and deletions. Footer data lives in FooterPageSeeder. SiteSettingsPageSeeder retains shared presentation and archived settings.

| Page / area | URL | Seeder | Linked sections |
| --- | --- | --- | --- |
| Home | / | `HomePageSeeder` | 42 |
| Clients | /clients | `ClientsPageSeeder` | 17 |
| Services | /services | `ServicesPageSeeder` | 14 |
| SOC | /services/soc | `SocPageSeeder` | 42 |
| VAPT | /services/vapt | `VaptPageSeeder` | 39 |
| IT Audit | /services/it-audit | `ItAuditPageSeeder` | 17 |
| Capacity Building | /services/capacity-building | `CapacityBuildingPageSeeder` | 19 |
| Secure Code Review | /services/secure-code-review | `SecureCodeReviewPageSeeder` | 13 |
| AI & Automation | /services/ai-and-automation | `AiAutomationPageSeeder` | 15 |
| Offensive Security | /services/offensive-security-services | `OffensiveSecurityPageSeeder` | 15 |
| Defensive Security | /services/defensive-security-services | `DefensiveSecurityPageSeeder` | 18 |
| Prohoree 365 | /vciso | `VcisoPageSeeder` | 21 |
| About Us | /about | `AboutPageSeeder` | 15 |
| Our Team | /our-team | `OurTeamPageSeeder` | 13 |
| Career | /career | `CareerPageSeeder` | 14 |
| Contact | /contact | `ContactPageSeeder` | 14 |
| Navigation | Shared area | `NavigationPageSeeder` | 7 |
| Footer | Shared area | `FooterPageSeeder` | 7 |
| Site settings | Shared area | `SiteSettingsPageSeeder` | 12 |

## Upgrading and resetting

Use `php artisan migrate --seed` to transfer existing records to the page tables and seed the menu. The upgrade copies records before removing old tables; content, order, visibility, soft deletes and audit references are retained. Historical migrations remain to support existing installations and rollback. Use `php artisan migrate:fresh --seed` only when intentionally resetting the database.

Seeders preserve administrator edits and do not restore trashed content. Deleting page copy removes it from the public output; the page editor retains a Restore action. Media files stay on disk; their paths and metadata are stored in the database.

## Page editor coverage and media

The page-to-section links include every content dependency observed when rendering each public page. A regression test compares actual rendered dependencies with those links. Shared navbar, footer, logos, client strips and contact banners are reachable from each page that uses them.

Each page includes an Images, videos & logos panel with previews, search, uploads and a thumbnail library picker. Saving one media field retains all other content and checks for concurrent edits. Menus include one-click submenu creation, page selection for links, and sibling-only reordering. The built-in administrator guide is `/admin/help`.
