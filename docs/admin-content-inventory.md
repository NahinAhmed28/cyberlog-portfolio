# Page-based portfolio administration

The sidebar contains the 16 public portfolio pages, Navigation, Footer, Site settings, Media library and Inquiries. Each page editor groups its text, images, videos and cards into expandable sections. Archived layouts remain available within their owning page. Navigation has a separate editor for parent dropdowns, child links, buttons, dividers, visibility and order. Its branding editor manages the logo and mobile menu label. Footer has its own page editor.

## Editor categories and field isolation

Page panels follow the sections that display the content. Hero fields, client logos, client website cards, benefits, pricing, reviews and contact banners have separate categories. Shared navigation, footer, service catalogue and layout settings are kept under **Shared website content**; page titles have a settings category, and unused fields remain available under **Earlier layouts**. Media is grouped by its owning section as well.

`ContentPlacement` expands Blade includes with their parameters and follows prepared collections into the sections that consume them. Preparing a client list before a section no longer puts its editor under the preceding hero. Nested object/list fields inherit their parent category, and a card's title is not labeled as an SEO title. Existing legacy blocks get corrected editor membership at display time, preserving saved public order, visibility, duplicates and content.

Section edit links include their own field scope. Saves merge only that scope into the existing record, preserve other sections, and reject uploads to a different section. Invalid section links fail instead of opening the entire record. The career values and workplace-benefits sections have distinct anchors.

`AdminFieldPlacementTest` checks every assigned field and scoped edit/create form across all 16 public pages, verifies nested categories and client/hero/navbar separation, and tests cross-section save/upload isolation. It writes a local audit inventory to `storage/framework/testing/admin-editor-category-audit.json` when run.

Each page is linked only to the sections its template renders, plus its own archived layouts: the Footer area no longer lists the service catalogue, the Services page no longer lists the offensive/defensive group headings, and the home threat feed, SOC console messages and VAPT scan messages belong to the hero of their own page instead of every page and Site settings. `config/portfolio_pages.php` is the single source of truth; `PageSeeder` syncs those links on every seed and the `realign_page_sections_with_templates` migration applies them to existing installations without touching content.

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
| Home | / | `HomePageSeeder` | 41 |
| Clients | /clients | `ClientsPageSeeder` | 15 |
| Services | /services | `ServicesPageSeeder` | 11 |
| SOC | /services/soc | `SocPageSeeder` | 43 |
| VAPT | /services/vapt | `VaptPageSeeder` | 39 |
| IT Audit | /services/it-audit | `ItAuditPageSeeder` | 15 |
| Capacity Building | /services/capacity-building | `CapacityBuildingPageSeeder` | 17 |
| Secure Code Review | /services/secure-code-review | `SecureCodeReviewPageSeeder` | 11 |
| AI & Automation | /services/ai-and-automation | `AiAutomationPageSeeder` | 13 |
| Offensive Security | /services/offensive-security-services | `OffensiveSecurityPageSeeder` | 13 |
| Defensive Security | /services/defensive-security-services | `DefensiveSecurityPageSeeder` | 16 |
| Prohoree 365 | /vciso | `VcisoPageSeeder` | 19 |
| About Us | /about | `AboutPageSeeder` | 13 |
| Our Team | /our-team | `OurTeamPageSeeder` | 11 |
| Career | /career | `CareerPageSeeder` | 12 |
| Contact | /contact | `ContactPageSeeder` | 12 |
| Navigation | Shared area | `NavigationPageSeeder` | 7 |
| Footer | Shared area | `FooterPageSeeder` | 6 |
| Site settings | Shared area | `SiteSettingsPageSeeder` | 9 |

## Upgrading and resetting

Use `php artisan migrate --seed` to transfer existing records to the page tables and seed the menu. The upgrade copies records before removing old tables; content, order, visibility, soft deletes and audit references are retained. Historical migrations remain to support existing installations and rollback. Use `php artisan migrate:fresh --seed` only when intentionally resetting the database.

Seeders preserve administrator edits and do not restore trashed content. Deleting page copy removes it from the public output; the page editor retains a Restore action. Media files stay on disk; their paths and metadata are stored in the database.

## Page editor coverage and media

The page-to-section links include every content dependency observed when rendering each public page. A regression test compares actual rendered dependencies with those links. Shared navbar, footer, logos, client strips and contact banners are reachable from each page that uses them.

Each page includes an Images, videos & logos panel with previews, search, uploads and a thumbnail library picker. Saving one media field retains all other content and checks for concurrent edits. Menus include one-click submenu creation, page selection for links, and sibling-only reordering. The built-in administrator guide is `/admin/help`.
