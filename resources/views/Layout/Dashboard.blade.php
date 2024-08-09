@extends('Layout.Template')
@section('Template')
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Aside-->
        <div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true"
            data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}"
            data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}"
            data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
            <!--begin::Brand-->
            <div class="aside-logo flex-column-auto" id="kt_aside_logo">
                <!--begin::Logo-->
                <a href="../../demo13/dist/index.html">
                    <img alt="Logo" src="assets/media/logos/logo-demo13.svg" class="h-15px logo" />
                </a>
                <!--end::Logo-->
                <!--begin::Aside toggler-->
                <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
                    data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                    data-kt-toggle-name="aside-minimize">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
                    <span class="svg-icon svg-icon-1 rotate-180">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path
                                d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z"
                                fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Aside toggler-->
            </div>
            <!--end::Brand-->
            <!--begin::Aside menu-->
            <div class="aside-menu flex-column-fluid">
                <!--begin::Aside Menu-->
                <div class="hover-scroll-overlay-y my-2 py-5 py-lg-8" id="kt_aside_menu_wrapper"
                    data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                    data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
                    data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
                    <!--begin::Menu-->
                    <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                        id="#kt_aside_menu" data-kt-menu="true">
                        <div class="menu-item">
                            <div class="menu-content pb-2">
                                <span class="menu-section text-muted text-uppercase fs-8 ls-1">Dashboard</span>
                            </div>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link active" href="../../demo13/dist/index.html">
                                <span class="menu-icon">
                                    <i class="bi bi-grid fs-3"></i>
                                </span>
                                <span class="menu-title">Default</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo13/dist/dashboards/only-header.html">
                                <span class="menu-icon">
                                    <i class="bi bi-window fs-3"></i>
                                </span>
                                <span class="menu-title">Only Header</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo13/dist/landing.html">
                                <span class="menu-icon">
                                    <i class="bi bi-app-indicator fs-3"></i>
                                </span>
                                <span class="menu-title">Landing Page</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <div class="menu-content pt-8 pb-2">
                                <span class="menu-section text-muted text-uppercase fs-8 ls-1">Crafted</span>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="bi bi-archive fs-3"></i>
                                </span>
                                <span class="menu-title">Pages</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Profile</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/pages/profile/overview.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Overview</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/pages/profile/projects.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Projects</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/pages/profile/campaigns.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Campaigns</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/pages/profile/documents.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Documents</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/pages/profile/connections.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Connections</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/pages/profile/activity.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Activity</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Projects</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/pages/projects/list.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">My Projects</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/pages/projects/project.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">View Project</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/pages/projects/targets.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Targets</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/pages/projects/budget.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Budget</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/pages/projects/users.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Users</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/pages/projects/files.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Files</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/pages/projects/activity.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Activity</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/pages/projects/settings.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Settings</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Wizards</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/pages/wizards/horizontal.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Horizontal</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/pages/wizards/vertical.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Vertical</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Search</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/pages/search/horizontal.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Horizontal</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/pages/search/vertical.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Vertical</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Blog</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo13/dist/pages/blog/home.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Blog Home</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo13/dist/pages/blog/post.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Blog Post</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Company</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/pages/company/about.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">About Us</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/pages/company/pricing.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Pricing</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/pages/company/contact.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Contact Us</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo13/dist/pages/company/team.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Our Team</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/pages/company/licenses.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Licenses</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/pages/company/sitemap.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Sitemap</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Careers</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo13/dist/pages/careers/list.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Careers List</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/pages/careers/apply.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Careers Apply</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">FAQ</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo13/dist/pages/faq/classic.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Classic</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo13/dist/pages/faq/extended.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Extended</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="bi bi-person fs-2"></i>
                                </span>
                                <span class="menu-title">Account</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo13/dist/account/overview.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Overview</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo13/dist/account/settings.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Settings</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo13/dist/account/security.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Security</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo13/dist/account/billing.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Billing</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo13/dist/account/statements.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Statements</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo13/dist/account/referrals.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Referrals</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo13/dist/account/api-keys.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">API Keys</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="bi bi-sticky fs-3"></i>
                                </span>
                                <span class="menu-title">Authentication</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Basic Flow</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/authentication/flows/basic/sign-in.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Sign-in</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/authentication/flows/basic/sign-up.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Sign-up</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/authentication/flows/basic/two-steps.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Two-steps</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/authentication/flows/basic/password-reset.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Password Reset</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/authentication/flows/basic/new-password.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">New Password</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Aside Flow</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/authentication/flows/aside/sign-in.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Sign-in</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/authentication/flows/aside/sign-up.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Sign-up</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/authentication/flows/aside/two-steps.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Two-steps</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/authentication/flows/aside/password-reset.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Password Reset</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/authentication/flows/aside/new-password.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">New Password</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Dark Flow</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/authentication/flows/dark/sign-in.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Sign-in</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/authentication/flows/dark/sign-up.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Sign-up</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/authentication/flows/dark/two-steps.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Two-steps</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/authentication/flows/dark/password-reset.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Password Reset</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/authentication/flows/dark/new-password.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">New Password</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link"
                                        href="../../demo13/dist/authentication/extended/multi-steps-sign-up.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Multi-steps Sign-up</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link"
                                        href="../../demo13/dist/authentication/extended/free-trial-sign-up.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Free Trial Sign-up</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link"
                                        href="../../demo13/dist/authentication/extended/coming-soon.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Coming Soon</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link"
                                        href="../../demo13/dist/authentication/general/welcome.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Welcome Message</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link"
                                        href="../../demo13/dist/authentication/general/verify-email.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Verify Email</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link"
                                        href="../../demo13/dist/authentication/general/password-confirmation.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Password Confirmation</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link"
                                        href="../../demo13/dist/authentication/general/deactivation.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Account Deactivation</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link"
                                        href="../../demo13/dist/authentication/general/error-404.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Error 404</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link"
                                        href="../../demo13/dist/authentication/general/error-500.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Error 500</span>
                                    </a>
                                </div>
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Email Templates</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/authentication/email/verify-email.html"
                                                target="blank">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Verify Email</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/authentication/email/invitation.html"
                                                target="blank">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Account Invitation</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/authentication/email/password-reset.html"
                                                target="blank">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Password Reset</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/authentication/email/password-change.html"
                                                target="blank">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Password Changed</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="bi bi-shield-check fs-3"></i>
                                </span>
                                <span class="menu-title">Modals</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">General</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/modals/general/invite-friends.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Invite Friends</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/modals/general/view-users.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">View Users</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/modals/general/select-users.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Select Users</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/modals/general/upgrade-plan.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Upgrade Plan</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/modals/general/share-earn.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Share &amp; Earn</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Forms</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/modals/forms/new-target.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">New Target</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/modals/forms/new-card.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">New Card</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/modals/forms/new-address.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">New Address</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/modals/forms/create-api-key.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Create API Key</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Wizards</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/modals/wizards/two-factor-authentication.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Two Factor Auth</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/modals/wizards/create-app.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Create App</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/modals/wizards/create-account.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Create Account</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/modals/wizards/create-project.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Create Project</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/modals/wizards/offer-a-deal.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Offer a Deal</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Search</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/modals/search/users.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Users</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/modals/search/select-location.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Select Location</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="bi bi-layers fs-3"></i>
                                </span>
                                <span class="menu-title">Widgets</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo13/dist/widgets/lists.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Lists</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo13/dist/widgets/statistics.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Statistics</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo13/dist/widgets/charts.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Charts</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo13/dist/widgets/mixed.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Mixed</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo13/dist/widgets/tables.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Tables</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo13/dist/widgets/feeds.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Feeds</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-content pt-8 pb-2">
                                <span class="menu-section text-muted text-uppercase fs-8 ls-1">Apps</span>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="bi bi-printer fs-3"></i>
                                </span>
                                <span class="menu-title">Customers</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link"
                                        href="../../demo13/dist/apps/customers/getting-started.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Getting Started</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo13/dist/apps/customers/list.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Customer Listing</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo13/dist/apps/customers/view.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Customer Details</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="bi bi-cart fs-3"></i>
                                </span>
                                <span class="menu-title">Subscriptions</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link"
                                        href="../../demo13/dist/apps/subscriptions/getting-started.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Getting Started</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo13/dist/apps/subscriptions/list.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Subscription List</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo13/dist/apps/subscriptions/add.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Add Subscription</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo13/dist/apps/subscriptions/view.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">View Subscription</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="bi bi-hr fs-3"></i>
                                </span>
                                <span class="menu-title">Invoice Manager</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">View Invoices</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/apps/invoices/view/invoice-1.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Invoice 1</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/apps/invoices/view/invoice-2.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Invoice 2</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo13/dist/apps/invoices/create.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Create Invoice</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="bi bi-people fs-3"></i>
                                </span>
                                <span class="menu-title">User Management</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                    <span class="menu-link">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Users</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/apps/user-management/users/list.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Users List</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/apps/user-management/users/view.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">View User</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Roles</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/apps/user-management/roles/list.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Roles List</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/apps/user-management/roles/view.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">View Role</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link"
                                        href="../../demo13/dist/apps/user-management/permissions.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Permissions</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="bi bi-people fs-3"></i>
                                </span>
                                <span class="menu-title">Support Center</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link"
                                        href="../../demo13/dist/apps/support-center/overview.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Overview</span>
                                    </a>
                                </div>
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                    <span class="menu-link">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Tickets</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/apps/support-center/tickets/list.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Tickets List</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/apps/support-center/tickets/view.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">View Ticket</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                    <span class="menu-link">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Tutorials</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/apps/support-center/tutorials/list.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Tutorials List</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="../../demo13/dist/apps/support-center/tutorials/post.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Tutorial Post</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo13/dist/apps/support-center/faq.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">FAQ</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link"
                                        href="../../demo13/dist/apps/support-center/licenses.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Licenses</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link"
                                        href="../../demo13/dist/apps/support-center/contact.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Contact Us</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo13/dist/apps/calendar.html">
                                <span class="menu-icon">
                                    <i class="bi bi-calendar3-event fs-3"></i>
                                </span>
                                <span class="menu-title">Calendar</span>
                            </a>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="bi-chat-left fs-3"></i>
                                </span>
                                <span class="menu-title">Chat</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo13/dist/apps/chat/private.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Private Chat</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo13/dist/apps/chat/group.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Group Chat</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo13/dist/apps/chat/drawer.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Drawer Chat</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-content pt-8 pb-0">
                                <span class="menu-section text-muted text-uppercase fs-8 ls-1">Layout</span>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="bi bi-layout-sidebar fs-3"></i>
                                </span>
                                <span class="menu-title">Aside</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo13/dist/layouts/aside/light.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Light Skin</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo13/dist/layouts/aside/font-icons.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Font Icons</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo13/dist/layouts/aside/minimized.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Minimized</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link"
                                href="https://preview.keenthemes.com/metronic8/demo13/layout-builder.html"
                                data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                data-bs-placement="right">
                                <span class="menu-icon">
                                    <i class="bi bi-layers fs-3"></i>
                                </span>
                                <span class="menu-title">Layout Builder</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <div class="menu-content">
                                <div class="separator mx-1 my-4"></div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link"
                                href="../../demo13/dist/documentation/getting-started/changelog.html">
                                <span class="menu-icon">
                                    <!--begin::Svg Icon | path: icons/duotune/coding/cod003.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M16.95 18.9688C16.75 18.9688 16.55 18.8688 16.35 18.7688C15.85 18.4688 15.75 17.8688 16.05 17.3688L19.65 11.9688L16.05 6.56876C15.75 6.06876 15.85 5.46873 16.35 5.16873C16.85 4.86873 17.45 4.96878 17.75 5.46878L21.75 11.4688C21.95 11.7688 21.95 12.2688 21.75 12.5688L17.75 18.5688C17.55 18.7688 17.25 18.9688 16.95 18.9688ZM7.55001 18.7688C8.05001 18.4688 8.15 17.8688 7.85 17.3688L4.25001 11.9688L7.85 6.56876C8.15 6.06876 8.05001 5.46873 7.55001 5.16873C7.05001 4.86873 6.45 4.96878 6.15 5.46878L2.15 11.4688C1.95 11.7688 1.95 12.2688 2.15 12.5688L6.15 18.5688C6.35 18.8688 6.65 18.9688 6.95 18.9688C7.15 18.9688 7.35001 18.8688 7.55001 18.7688Z"
                                                fill="black" />
                                            <path opacity="0.3"
                                                d="M10.45 18.9687C10.35 18.9687 10.25 18.9687 10.25 18.9687C9.75 18.8687 9.35 18.2688 9.55 17.7688L12.55 5.76878C12.65 5.26878 13.25 4.8687 13.75 5.0687C14.25 5.1687 14.65 5.76878 14.45 6.26878L11.45 18.2688C11.35 18.6688 10.85 18.9687 10.45 18.9687Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title">Changelog v8.0.25</span>
                            </a>
                        </div>
                    </div>
                    <!--end::Menu-->
                </div>
            </div>            
            <!--end::Footer-->
        </div>
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" style="" class="header align-items-stretch">
                <!--begin::Container-->
                <div class="container-fluid d-flex align-items-stretch justify-content-between">
                    <!--begin::Aside mobile toggle-->
                    <div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
                        <div class="btn btn-icon btn-active-color-white" id="kt_aside_mobile_toggle">
                            <i class="bi bi-list fs-1"></i>
                        </div>
                    </div>
                    <!--end::Aside mobile toggle-->
                    <!--begin::Mobile logo-->
                    <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                        <a href="../../demo13/dist/index.html" class="d-lg-none">
                            <img alt="Logo" src="assets/media/logos/logo-demo13-compact.svg"
                                class="h-25px" />
                        </a>
                    </div>
                    <!--end::Mobile logo-->
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                        <!--begin::Navbar-->
                        <div class="d-flex align-items-stretch" id="kt_header_nav">
                            <!--begin::Menu wrapper-->
                            <div class="header-menu align-items-stretch" data-kt-drawer="true"
                                data-kt-drawer-name="header-menu"
                                data-kt-drawer-activate="{default: true, lg: false}"
                                data-kt-drawer-overlay="true"
                                data-kt-drawer-width="{default:'200px', '300px': '250px'}"
                                data-kt-drawer-direction="end"
                                data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true"
                                data-kt-swapper-mode="prepend"
                                data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                            </div>
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::Navbar-->
                        <!--begin::Topbar-->
                        <div class="d-flex align-items-stretch flex-shrink-0">
                            <!--begin::Toolbar wrapper-->
                            <div class="d-flex align-items-stretch flex-shrink-0">
                                <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                                    <!--begin::Menu wrapper-->
                                    <div class="cursor-pointer symbol symbol-30px symbol-md-40px"
                                        data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                                        data-kt-menu-placement="bottom-end">                               
                                        {{-- @if (auth()->user()->Pegawai->jenis_kelamin == '313ca348-740e-4c3c-803f-96ed876534cd') --}}
                                            <img src="{{ asset('assets/media/avatars/man.png')}}"
                                                alt="Nama Pegawai" />
                                        {{-- @else
                                            <img src="{{ asset('DashboardPage/avatars/girl.png') }}"
                                                alt="Nama Pegawai" />
                                        @endif --}}
                                    </div>
                                    <div class="cursor-pointer symbol symbol-30px symbol-md-40px"
                                        style="margin-left: 5%">
                                        <form action="" method="post">
                                            @csrf
                                            <button type="submit"
                                                class="btn btn-icon btn-outline-danger btn-active-light-danger"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                title="Keluar"><span class="indicator-label">
                                                    <span class="svg-icon svg-icon-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                                            <path fill-rule="evenodd"
                                                                d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Topbar-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <!--begin::Toolbar-->
                <div class="toolbar" id="kt_toolbar">
                    <!--begin::Container-->
                    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                        <!--begin::Page title-->
                        <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                            data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                            class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                            <!--begin::Title-->
                            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Dashboard
                                <!--begin::Separator-->
                                <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                                <!--end::Separator-->
                                <!--begin::Description-->
                                <small class="text-muted fs-7 fw-bold my-1 ms-1">#XRS-45670</small>
                                <!--end::Description-->
                            </h1>
                            <!--end::Title-->
                        </div>
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Post-->
                
                <!--end::Post-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                <!--begin::Container-->
                <div
                    class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <!--begin::Copyright-->
                    <div class="text-dark order-2 order-md-1">
                        <span class="text-muted fw-bold me-1">2021©</span>
                        <a href="" target="_blank"
                            class="text-gray-800 text-hover-primary">Keenthemes</a>
                    </div>
                    <!--end::Copyright-->
                    <!--begin::Menu-->
                    <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
                        <li class="menu-item">
                            <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                        </li>
                        <li class="menu-item">
                            <a href="https://keenthemes.com/support" target="_blank"
                                class="menu-link px-2">Support</a>
                        </li>
                        <li class="menu-item">
                            <a href="https://1.envato.market/EA4JP" target="_blank"
                                class="menu-link px-2">Purchase</a>
                        </li>
                    </ul>
                    <!--end::Menu-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
@endsection