# Portfolio content coverage

Each row below has a dedicated migration, database table, and seeder. The public Blade views read these records through `content()` and `content_items()`. Repeating records support adding, editing, hiding, ordering, trashing and restoring. Nested lists are edited inside their parent record.

| Feature | Group | Table | Seeder | Type |
| --- | --- | --- | --- | --- |
| Page AI Automation | AI Automation | `cms_page_ai_automation` | `PageAiAutomationSeeder` | Copy / settings |
| Page Clients | Clients | `cms_page_clients` | `PageClientsSeeder` | Copy / settings |
| Page Home | Home | `cms_page_home` | `PageHomeSeeder` | Copy / settings |
| Site Public | Shared content | `cms_site_public` | `SitePublicSeeder` | Copy / settings |
| Clients Client Strip | Archived layouts | `cms_clients_client_strip` | `ClientsClientStripSeeder` | Copy / settings |
| Clients | Archived layouts | `cms_clients_client_strip_clients` | `ClientsClientStripClientsSeeder` | Collection |
| Client stories heading | Clients | `cms_clients_deck` | `ClientsDeckSeeder` | Copy / settings |
| Client stories & screenshots | Clients | `cms_clients_deck_screens` | `ClientsDeckScreensSeeder` | Collection |
| Footer copy & contact details | Shared content | `cms_footer` | `FooterSeeder` | Copy / settings |
| Home Assessment | Home | `cms_home_assessment` | `HomeAssessmentSeeder` | Copy / settings |
| Home Cta Banner | Home | `cms_home_cta_banner` | `HomeCtaBannerSeeder` | Copy / settings |
| Home Defend | Home | `cms_home_defend` | `HomeDefendSeeder` | Copy / settings |
| Hero headline & introduction | Home | `cms_home_hero` | `HomeHeroSeeder` | Copy / settings |
| Home Network | Home | `cms_home_network` | `HomeNetworkSeeder` | Copy / settings |
| Company story headings | Home | `cms_home_our_story` | `HomeOurStorySeeder` | Copy / settings |
| Company milestones | Home | `cms_home_our_story_milestones` | `HomeOurStoryMilestonesSeeder` | Collection |
| Home Solutions | Home | `cms_home_solutions` | `HomeSolutionsSeeder` | Copy / settings |
| Engagement process headings | Home | `cms_home_tech_diagram` | `HomeTechDiagramSeeder` | Copy / settings |
| Home Threats | Home | `cms_home_threats` | `HomeThreatsSeeder` | Copy / settings |
| Navigation & branding | Shared content | `cms_nav` | `NavSeeder` | Copy / settings |
| Primary Routes | Shared content | `cms_nav_primary_routes` | `NavPrimaryRoutesSeeder` | Collection |
| SOC Benefits | SOC | `cms_soc_benefits` | `SocBenefitsSeeder` | Copy / settings |
| SOC Benefits Benefits | SOC | `cms_soc_benefits_benefits` | `SocBenefitsBenefitsSeeder` | Collection |
| SOC Calculator | SOC | `cms_soc_calculator` | `SocCalculatorSeeder` | Copy / settings |
| SOC Comparison | SOC | `cms_soc_comparison` | `SocComparisonSeeder` | Copy / settings |
| SOC comparison rows | SOC | `cms_soc_comparison_rows` | `SocComparisonRowsSeeder` | Collection |
| SOC Expert | SOC | `cms_soc_expert` | `SocExpertSeeder` | Copy / settings |
| SOC Hero | SOC | `cms_soc_hero` | `SocHeroSeeder` | Copy / settings |
| SOC Hero Height Items | SOC | `cms_soc_hero_height_items` | `SocHeroHeightItemsSeeder` | Collection |
| SOC Matrix | SOC | `cms_soc_matrix` | `SocMatrixSeeder` | Copy / settings |
| SOC capability rows | SOC | `cms_soc_matrix_caps` | `SocMatrixCapsSeeder` | Collection |
| SOC comparison columns | SOC | `cms_soc_matrix_tiers` | `SocMatrixTiersSeeder` | Collection |
| SOC Numbers | SOC | `cms_soc_numbers` | `SocNumbersSeeder` | Copy / settings |
| SOC Pricing | SOC | `cms_soc_pricing` | `SocPricingSeeder` | Copy / settings |
| SOC pricing plans | SOC | `cms_soc_pricing_plans` | `SocPricingPlansSeeder` | Collection |
| SOC Reviews | SOC | `cms_soc_reviews` | `SocReviewsSeeder` | Copy / settings |
| SOC Reviews Reviews | SOC | `cms_soc_reviews_reviews` | `SocReviewsReviewsSeeder` | Collection |
| SOC Sensor | SOC | `cms_soc_sensor` | `SocSensorSeeder` | Copy / settings |
| SOC Sensor Sensors | SOC | `cms_soc_sensor_sensors` | `SocSensorSensorsSeeder` | Collection |
| VAPT Benefits | VAPT | `cms_vapt_benefits` | `VaptBenefitsSeeder` | Copy / settings |
| VAPT Benefits Benefits | VAPT | `cms_vapt_benefits_benefits` | `VaptBenefitsBenefitsSeeder` | Collection |
| VAPT Boxes | VAPT | `cms_vapt_boxes` | `VaptBoxesSeeder` | Copy / settings |
| VAPT Boxes Boxes | VAPT | `cms_vapt_boxes_boxes` | `VaptBoxesBoxesSeeder` | Collection |
| VAPT Calculator | VAPT | `cms_vapt_calculator` | `VaptCalculatorSeeder` | Copy / settings |
| VAPT Hero | VAPT | `cms_vapt_hero` | `VaptHeroSeeder` | Copy / settings |
| VAPT Hero Height Items | VAPT | `cms_vapt_hero_height_items` | `VaptHeroHeightItemsSeeder` | Collection |
| VAPT Hero Step Items | VAPT | `cms_vapt_hero_step_items` | `VaptHeroStepItemsSeeder` | Collection |
| VAPT Matrix | VAPT | `cms_vapt_matrix` | `VaptMatrixSeeder` | Copy / settings |
| VAPT comparison rows | VAPT | `cms_vapt_matrix_rows` | `VaptMatrixRowsSeeder` | Collection |
| VAPT Numbers | VAPT | `cms_vapt_numbers` | `VaptNumbersSeeder` | Copy / settings |
| VAPT Posture | VAPT | `cms_vapt_posture` | `VaptPostureSeeder` | Copy / settings |
| VAPT Posture Nodes | VAPT | `cms_vapt_posture_nodes` | `VaptPostureNodesSeeder` | Collection |
| VAPT Reviews | VAPT | `cms_vapt_reviews` | `VaptReviewsSeeder` | Copy / settings |
| VAPT Reviews Reviews | VAPT | `cms_vapt_reviews_reviews` | `VaptReviewsReviewsSeeder` | Collection |
| VAPT Success | VAPT | `cms_vapt_success` | `VaptSuccessSeeder` | Copy / settings |
| vCISO Hero | Prohoree 365 | `cms_vciso_hero` | `VcisoHeroSeeder` | Copy / settings |
| vCISO Hero Left Nodes | Prohoree 365 | `cms_vciso_hero_left_nodes` | `VcisoHeroLeftNodesSeeder` | Collection |
| vCISO Hero Right Nodes | Prohoree 365 | `cms_vciso_hero_right_nodes` | `VcisoHeroRightNodesSeeder` | Collection |
| vCISO Product | Prohoree 365 | `cms_vciso_product` | `VcisoProductSeeder` | Copy / settings |
| Prohoree product modules | Prohoree 365 | `cms_vciso_product_modules` | `VcisoProductModulesSeeder` | Collection |
| Page Service Detail | Service Detail | `cms_page_service_detail` | `PageServiceDetailSeeder` | Copy / settings |
| Page SOC | SOC | `cms_page_soc` | `PageSocSeeder` | Copy / settings |
| Page VAPT | VAPT | `cms_page_vapt` | `PageVaptSeeder` | Copy / settings |
| Page vCISO | vCISO | `cms_page_vciso` | `PageVcisoSeeder` | Copy / settings |
| Layout Portfolio | Shared content | `cms_layout_portfolio` | `LayoutPortfolioSeeder` | Copy / settings |
| Page About | About | `cms_page_about` | `PageAboutSeeder` | Copy / settings |
| Page Capacity Building | Capacity Building | `cms_page_capacity_building` | `PageCapacityBuildingSeeder` | Copy / settings |
| Item Items | Capacity Building | `cms_page_capacity_building_item_items` | `PageCapacityBuildingItemItemsSeeder` | Collection |
| W Items | Capacity Building | `cms_page_capacity_building_w_items` | `PageCapacityBuildingWItemsSeeder` | Collection |
| Page Career | Career | `cms_page_career` | `PageCareerSeeder` | Copy / settings |
| Company values | Career | `cms_page_career_w_items` | `PageCareerWItemsSeeder` | Collection |
| Career benefits | Career | `cms_page_career_w_items_2` | `PageCareerWItems2Seeder` | Collection |
| Job openings | Career | `cms_page_career_job_items` | `PageCareerJobItemsSeeder` | Collection |
| Page Contact | Contact | `cms_page_contact` | `PageContactSeeder` | Copy / settings |
| Legacy Pages Defense Services | Archived layouts | `cms_legacy_pages_defense_services` | `LegacyPagesDefenseServicesSeeder` | Copy / settings |
| Offensive | Archived layouts | `cms_legacy_pages_defense_services_offensive` | `LegacyPagesDefenseServicesOffensiveSeeder` | Collection |
| Defensive | Archived layouts | `cms_legacy_pages_defense_services_defensive` | `LegacyPagesDefenseServicesDefensiveSeeder` | Collection |
| Page Defensive Security Services | Defensive Security Services | `cms_page_defensive_security_services` | `PageDefensiveSecurityServicesSeeder` | Copy / settings |
| Items | Defensive Security Services | `cms_page_defensive_security_services_items` | `PageDefensiveSecurityServicesItemsSeeder` | Collection |
| Legacy Pages Home | Archived layouts | `cms_legacy_pages_home` | `LegacyPagesHomeSeeder` | Copy / settings |
| Step Items | Archived layouts | `cms_legacy_pages_home_step_items` | `LegacyPagesHomeStepItemsSeeder` | Collection |
| Sol Items | Archived layouts | `cms_legacy_pages_home_sol_items` | `LegacyPagesHomeSolItemsSeeder` | Collection |
| Case Items | Archived layouts | `cms_legacy_pages_home_case_items` | `LegacyPagesHomeCaseItemsSeeder` | Collection |
| M Items | Archived layouts | `cms_legacy_pages_home_m_items` | `LegacyPagesHomeMItemsSeeder` | Collection |
| Page It Audit | It Audit | `cms_page_it_audit` | `PageItAuditSeeder` | Copy / settings |
| V Items | It Audit | `cms_page_it_audit_v_items` | `PageItAuditVItemsSeeder` | Collection |
| Step Items | It Audit | `cms_page_it_audit_step_items` | `PageItAuditStepItemsSeeder` | Collection |
| Page Offensive Security Services | Offensive Security Services | `cms_page_offensive_security_services` | `PageOffensiveSecurityServicesSeeder` | Copy / settings |
| Items | Offensive Security Services | `cms_page_offensive_security_services_items` | `PageOffensiveSecurityServicesItemsSeeder` | Collection |
| Team page headings | Our Team | `cms_page_our_team` | `PageOurTeamSeeder` | Copy / settings |
| Leadership profiles | Our Team | `cms_page_our_team_team` | `PageOurTeamTeamSeeder` | Collection |
| Shared Security Service Group | Shared content | `cms_shared_security_service_group` | `SharedSecurityServiceGroupSeeder` | Copy / settings |
| Page Services | Services | `cms_page_services` | `PageServicesSeeder` | Copy / settings |
| Legacy Pages SOC | Archived layouts | `cms_legacy_pages_soc` | `LegacyPagesSocSeeder` | Copy / settings |
| Legacy Pages SOC Row Items | Archived layouts | `cms_legacy_pages_soc_row_items` | `LegacyPagesSocRowItemsSeeder` | Collection |
| Legacy Pages SOC B Items | Archived layouts | `cms_legacy_pages_soc_b_items` | `LegacyPagesSocBItemsSeeder` | Collection |
| Legacy Pages SOC S Items | Archived layouts | `cms_legacy_pages_soc_s_items` | `LegacyPagesSocSItemsSeeder` | Collection |
| Legacy Pages SOC Plan Items | Archived layouts | `cms_legacy_pages_soc_plan_items` | `LegacyPagesSocPlanItemsSeeder` | Collection |
| Legacy Pages VAPT | Archived layouts | `cms_legacy_pages_vapt` | `LegacyPagesVaptSeeder` | Copy / settings |
| Legacy Pages VAPT P Items | Archived layouts | `cms_legacy_pages_vapt_p_items` | `LegacyPagesVaptPItemsSeeder` | Collection |
| Legacy Pages VAPT Row Items | Archived layouts | `cms_legacy_pages_vapt_row_items` | `LegacyPagesVaptRowItemsSeeder` | Collection |
| Legacy Pages VAPT B Items | Archived layouts | `cms_legacy_pages_vapt_b_items` | `LegacyPagesVaptBItemsSeeder` | Collection |
| Legacy Pages vCISO | Archived layouts | `cms_legacy_pages_vciso` | `LegacyPagesVcisoSeeder` | Copy / settings |
| Legacy Pages vCISO Cap Items | Archived layouts | `cms_legacy_pages_vciso_cap_items` | `LegacyPagesVcisoCapItemsSeeder` | Collection |
| Legacy Pages vCISO Cap Items 2 | Archived layouts | `cms_legacy_pages_vciso_cap_items_2` | `LegacyPagesVcisoCapItems2Seeder` | Collection |
| Legacy Pages vCISO C Items | Archived layouts | `cms_legacy_pages_vciso_c_items` | `LegacyPagesVcisoCItemsSeeder` | Collection |
| Shared About Industries Clients | Shared content | `cms_shared_about_industries_clients` | `SharedAboutIndustriesClientsSeeder` | Copy / settings |
| Industry statistics | Shared content | `cms_shared_about_industries_clients_about_industries` | `SharedAboutIndustriesClientsAboutIndustriesSeeder` | Collection |
| Trusted organizations | Shared content | `cms_shared_about_industries_clients_about_clients` | `SharedAboutIndustriesClientsAboutClientsSeeder` | Collection |
| Client section headings | Shared content | `cms_shared_clients` | `SharedClientsSeeder` | Copy / settings |
| Client logos | Shared content | `cms_shared_clients_clients` | `SharedClientsClientsSeeder` | Collection |
| Shared Navbar | Archived layouts | `cms_shared_navbar` | `SharedNavbarSeeder` | Copy / settings |
| Service Links | Shared content | `cms_shared_navbar_service_links` | `SharedNavbarServiceLinksSeeder` | Collection |
| Service Route Names | Shared content | `cms_shared_navbar_service_route_names` | `SharedNavbarServiceRouteNamesSeeder` | Collection |
| Shared Page Hero | Shared content | `cms_shared_page_hero` | `SharedPageHeroSeeder` | Copy / settings |
| Shared Reviews | Shared content | `cms_shared_reviews` | `SharedReviewsSeeder` | Copy / settings |
| Reviews | Shared content | `cms_shared_reviews_reviews` | `SharedReviewsReviewsSeeder` | Collection |
| Shared Talk To Expert | Shared content | `cms_shared_talk_to_expert` | `SharedTalkToExpertSeeder` | Copy / settings |
| Legacy Portfolio Index | Archived layouts | `cms_legacy_portfolio_index` | `LegacyPortfolioIndexSeeder` | Copy / settings |
| Service Catalogue | Shared content | `cms_services` | `ServicesSeeder` | Collection |
| AI capability cards | AI Automation | `cms_page_ai_automation_cards` | `PageAiAutomationCardsSeeder` | Collection |
| AI case studies | AI Automation | `cms_page_ai_automation_cards_2` | `PageAiAutomationCards2Seeder` | Collection |
| AI evolution timeline | AI Automation | `cms_page_ai_automation_timeline` | `PageAiAutomationTimelineSeeder` | Collection |
| Wordmark | Shared content | `cms_footer_wordmark` | `FooterWordmarkSeeder` | Collection |
| Social links | Shared content | `cms_footer_cards` | `FooterCardsSeeder` | Collection |
| Col 12 | Shared content | `cms_footer_col_12` | `FooterCol12Seeder` | Collection |
| Cta2 Line | Home | `cms_home_cta_banner_cta2_line` | `HomeCtaBannerCta2LineSeeder` | Collection |
| Dao Stats | Home | `cms_home_defend_dao_stats` | `HomeDefendDaoStatsSeeder` | Collection |
| Floating service chips | Home | `cms_home_hero_drift` | `HomeHeroDriftSeeder` | Collection |
| Clnetcard | Home | `cms_home_network_clnetcard` | `HomeNetworkClnetcardSeeder` | Collection |
| Net Stats | Home | `cms_home_network_net_stats` | `HomeNetworkNetStatsSeeder` | Collection |
| Net Floats | Home | `cms_home_network_net_floats` | `HomeNetworkNetFloatsSeeder` | Collection |
| Story Stats | Home | `cms_home_our_story_story_stats` | `HomeOurStoryStoryStatsSeeder` | Collection |
| Engagement process steps | Home | `cms_home_tech_diagram_process_stage_grid` | `HomeTechDiagramProcessStageGridSeeder` | Collection |
| Th Floats | Home | `cms_home_threats_th_floats` | `HomeThreatsThFloatsSeeder` | Collection |
| Links | Archived layouts | `cms_soc_expert_links` | `SocExpertLinksSeeder` | Collection |
| Soc Log | SOC | `cms_soc_hero_soc_log` | `SocHeroSocLogSeeder` | Collection |
| Cards | SOC | `cms_soc_numbers_cards` | `SocNumbersCardsSeeder` | Collection |
| Vapt Logs | VAPT | `cms_vapt_hero_vapt_logs` | `VaptHeroVaptLogsSeeder` | Collection |
| Vapt Number Grid | VAPT | `cms_vapt_numbers_vapt_number_grid` | `VaptNumbersVaptNumberGridSeeder` | Collection |
| Stats | VAPT | `cms_vapt_success_vapt_success_stats` | `VaptSuccessVaptSuccessStatsSeeder` | Collection |
| Links | Archived layouts | `cms_page_capacity_building_links` | `PageCapacityBuildingLinksSeeder` | Collection |
| Links | Archived layouts | `cms_page_capacity_building_links_2` | `PageCapacityBuildingLinks2Seeder` | Collection |
| Links | Archived layouts | `cms_page_contact_links` | `PageContactLinksSeeder` | Collection |
| Contact social links | Contact | `cms_page_contact_cards` | `PageContactCardsSeeder` | Collection |
| Console Stats | Archived layouts | `cms_legacy_pages_home_console_stats` | `LegacyPagesHomeConsoleStatsSeeder` | Collection |
| Links | Archived layouts | `cms_legacy_pages_home_links` | `LegacyPagesHomeLinksSeeder` | Collection |
| Links | It Audit | `cms_page_it_audit_links` | `PageItAuditLinksSeeder` | Collection |
| Cards | Archived layouts | `cms_legacy_pages_soc_cards` | `LegacyPagesSocCardsSeeder` | Collection |
| Tr Items | Archived layouts | `cms_legacy_pages_soc_tr_items` | `LegacyPagesSocTrItemsSeeder` | Collection |
| Links | Archived layouts | `cms_legacy_pages_vapt_links` | `LegacyPagesVaptLinksSeeder` | Collection |
| Cards | Archived layouts | `cms_legacy_portfolio_index_cards` | `LegacyPortfolioIndexCardsSeeder` | Collection |
| Links | Archived layouts | `cms_legacy_portfolio_index_links` | `LegacyPortfolioIndexLinksSeeder` | Collection |
| Links | Archived layouts | `cms_legacy_portfolio_index_links_2` | `LegacyPortfolioIndexLinks2Seeder` | Collection |
| Links | Archived layouts | `cms_legacy_portfolio_index_links_3` | `LegacyPortfolioIndexLinks3Seeder` | Collection |
| Threat feed events | Shared content | `cms_threat_feed_events` | `ThreatFeedEventsSeeder` | Collection |
| SOC live console events | SOC | `cms_soc_live_events` | `SocLiveEventsSeeder` | Collection |
| VAPT live console events | VAPT | `cms_vapt_live_events` | `VaptLiveEventsSeeder` | Collection |
| Specialist teams | Our Team | `cms_team_units` | `TeamUnitsSeeder` | Collection |
| Company menu | Shared content | `cms_navigation_company_links` | `NavigationCompanyLinksSeeder` | Collection |
| Specialized service menu | Shared content | `cms_navigation_specialized_links` | `NavigationSpecializedLinksSeeder` | Collection |
| Footer company links | Shared content | `cms_footer_company_links` | `FooterCompanyLinksSeeder` | Collection |
| Footer specialized links | Shared content | `cms_footer_specialized_links` | `FooterSpecializedLinksSeeder` | Collection |
| Training packages | Capacity Building | `cms_training_packages` | `TrainingPackagesSeeder` | Collection |
