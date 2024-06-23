<script setup>
import { Head, Link, router, useForm } from '@inertiajs/vue3';

defineProps({ title: String});

document.addEventListener('DOMContentLoaded', function () {
	const menuCollapses = document.querySelectorAll('.menu-collapse');

	menuCollapses.forEach(menuCollapse => {

        const menuCollapseItem = menuCollapse.querySelector('.menu-collapse-item');
    	const submenu = menuCollapse.querySelector('ul');

	    menuCollapseItem.addEventListener('click', function () {
        const isExpanded = submenu.classList.toggle('expanded');
            if (isExpanded) {
                submenu.style.display = 'block';
            } else {
                submenu.style.display = 'none';
            }
	});

	submenu.style.display = 'none';
	});
});

</script>

<template> 

    <Head>
    <title>Dashboard</title>
    <meta name="description" content="Your page description">
    <link rel="stylesheet" href="/css/style.css">
    </Head>

    <body>
		
		<div id="root">
			<!-- App Layout-->
			<div class="app-layout-modern flex flex-auto flex-col">
				<div class="flex flex-auto min-w-0">
					
					
					<!-- Side Nav start-->
					<div class="side-nav side-nav-transparent side-nav-expand" style="background-color:#D8D7D6;">
						<div class="side-nav-header">
							<div class="logo px-6">

								
							</div>
						</div>
						<div class="side-nav-content relative side-nav-scroll">
							<nav class="menu menu-transparent px-4 pb-4">
								<div class="menu-group">
									<div class="menu-title">Inertia Admin Panel</div>
									<ul>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
												<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
												</svg>
												<span class="menu-item-text">Productos</span>
											</div>
											<ul>
												<li data-menu-item="modern-project-dashboard" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-project-dashboard.html">
														<span>Dashboard</span>
													</a>
												</li>
												<li data-menu-item="modern-project-list" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-project-list.html">
														<span>Project List</span>
													</a>
												</li>
												<li data-menu-item="modern-scrum-board" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-scrum-board.html">
														<span>Scrum Board</span>
													</a>
												</li>
												<li data-menu-item="modern-issue" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-issue.html">
														<span>Issue</span>
													</a>
												</li>
											</ul>
										</li>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
												<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
												</svg>
												<span class="menu-item-text">Pedidos</span>
											</div>
											<ul>
												<li data-menu-item="modern-crm-dashboard" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-crm-dashboard.html">
														<span>Dashboard</span>
													</a>
												</li>
												<li data-menu-item="modern-calendar" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-calendar.html">
														<span>Calendar</span>
													</a>
												</li>
												<li data-menu-item="modern-customers" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-customers.html">
														<span>Customers</span>
													</a>
												</li>
												<li data-menu-item="modern-customer-details" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-customer-details.html">
														<span>Customer Details</span>
													</a>
												</li>
												<li data-menu-item="modern-mail" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-mail.html">
														<span>Mail</span>
													</a>
												</li>
											</ul>
										</li>	


										<li class="menu-collapse">
											<div class="menu-collapse-item">
												<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
												</svg>
												<span class="menu-item-text">Ventas</span>
											</div>
											<ul>
												<li data-menu-item="modern-crm-dashboard" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-crm-dashboard.html">
														<span>Dashboard</span>
													</a>
												</li>
												<li data-menu-item="modern-calendar" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-calendar.html">
														<span>Calendar</span>
													</a>
												</li>
												<li data-menu-item="modern-customers" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-customers.html">
														<span>Customers</span>
													</a>
												</li>
												<li data-menu-item="modern-customer-details" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-customer-details.html">
														<span>Customer Details</span>
													</a>
												</li>
												<li data-menu-item="modern-mail" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-mail.html">
														<span>Mail</span>
													</a>
												</li>
											</ul>
										</li>								
							
										<li class="menu-collapse">
											<div class="menu-collapse-item">
												<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
												</svg>
												<span class="menu-item-text">Mi Cuenta</span>
											</div>
											<ul>
												<li data-menu-item="modern-settings" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-settings.html">
														<span>Settings</span>
													</a>
												</li>
												<li data-menu-item="modern-invoice" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-invoice.html">
														<span>Invoice</span>
													</a>
												</li>
												<li data-menu-item="modern-activity-log" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-activity-log.html">
														<span>Activity Log</span>
													</a>
												</li>
												<li data-menu-item="modern-kyc-form" class="menu-item">
													<a class="h-full w-full flex items-center"  href="modern-kyc-form.html">
														<span>KYC Form</span>
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</div>	
							
							</nav>	
						</div>
					</div>
					<!-- Side Nav end-->

					<!-- Header Nav start-->
					<div class="flex flex-col flex-auto min-h-screen min-w-0 relative w-full bg-white dark:bg-gray-800 border-l border-gray-200 dark:border-gray-700">
						<header class="header border-b border-gray-200 dark:border-gray-700">
							<div class="header-wrapper h-16">
								<!-- Header Nav Start start-->
								<div class="header-action header-action-start">
									<div id="side-nav-toggle" class="side-nav-toggle header-action-item header-action-item-hoverable">
										<div class="text-2xl">
											<svg class="side-nav-toggle-icon-expand" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
											</svg>
											<svg class="side-nav-toggle-icon-collapsed hidden" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
											</svg>
										</div>
									</div>
									<div class="side-nav-toggle-mobile header-action-item header-action-item-hoverable" data-bs-toggle="modal" data-bs-target="#mobile-nav-drawer">
										<div class="text-2xl">
											<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
											</svg>
										</div>
									</div>
									
								</div>
								<!-- Header Nav Start end-->
								<!-- Header Nav End start -->
								<div class="header-action header-action-end">	
									
									<div class="font-bold">User: </div> - <Link href="/logout" method="post"><div class="font-bold">Logout</div></Link>							
								
								</div>
								<!-- Header Nav End end -->
							</div>
						</header>	
                        
						<div class="h-full flex flex-auto flex-col justify-between">
							                            
                            <main>
                                <slot />
                            </main>

							<footer class="footer flex flex-auto items-center h-16 px-4 sm:px-6 md:px-8">
								<div class="flex items-center justify-between flex-auto w-full">
									<span>Copyright © 2024 <span class="font-semibold">Inertia A.R.D</span> All rights reserved.</span>
									<div>
										<a class="text-gray" href="">Term &amp; Conditions</a>
										<span class="mx-2 text-muted"> | </span>
										<a class="text-gray" href="">Privacy &amp; Policy</a>
									</div>
								</div>
							</footer>

						</div>

					</div>
				</div>
			</div>

        </div>

	</body>

</template>
