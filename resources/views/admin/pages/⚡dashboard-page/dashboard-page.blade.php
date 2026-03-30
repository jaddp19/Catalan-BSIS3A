<div>
    <!-- Content -->
    <div class="w-full">
        <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
            <!-- Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6">
                
                <!-- Total Users Card -->
                <div class="flex flex-col justify-center bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                    <div class="p-4 md:p-5">
                        <div class="flex items-center justify-between">
                            <p class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                                Total Users
                            </p>
                        </div>
                        <div class="mt-1 flex items-center justify-between">
                            <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                                {{ $totalUsers }}
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Total Roles Card -->
                <div class="flex flex-col justify-center bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                    <div class="p-4 md:p-5">
                        <div class="flex items-center justify-between">
                            <p class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                                Total Roles
                            </p>
                        </div>
                        <div class="mt-1 flex items-center justify-between">
                            <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                                {{ $totalRoles }}
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Total Bookings Card -->
                <div class="flex flex-col justify-center bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                    <div class="p-4 md:p-5">
                        <div class="flex items-center justify-between">
                            <p class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                                Total Bookings
                            </p>
                        </div>
                        <div class="mt-1 flex items-center justify-between">
                            <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                                {{ $totalBookings }}
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Total Pending Bookings Card -->
                <div class="flex flex-col justify-center bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                    <div class="p-4 md:p-5">
                        <div class="flex items-center justify-between">
                            <p class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                                Total Pending Bookings
                            </p>
                        </div>
                        <div class="mt-1 flex items-center justify-between">
                            <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                                {{ $totalPendingBookings }}
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Total Approved Bookings Card -->
                <div class="flex flex-col justify-center bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                    <div class="p-4 md:p-5">
                        <div class="flex items-center justify-between">
                            <p class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                                Total Approved Bookings
                            </p>
                        </div>
                        <div class="mt-1 flex items-center justify-between">
                            <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                                {{ $totalApprovedBookings }}
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Total Cancelled Bookings Card -->
                <div class="flex flex-col justify-center bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                    <div class="p-4 md:p-5">
                        <div class="flex items-center justify-between">
                            <p class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                                Total Cancelled Bookings
                            </p>
                        </div>
                        <div class="mt-1 flex items-center justify-between">
                            <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                                {{ $totalCancelledBookings }}
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

            </div>
            <!-- End Grid -->
            
            <!-- Charts Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
                <!-- Card -->
                <div
                    class="p-4 md:p-5 min-h-102.5 flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                    <!-- Header -->
                    <div class="flex flex-wrap justify-between items-center gap-2">
                        <div>
                            <h2 class="text-sm text-gray-500 dark:text-neutral-500">
                                Income
                            </h2>
                            <p class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                                ₱0.00
                            </p>
                        </div>
                    </div>
                    <!-- End Header -->

                    <div id="hs-multiple-bar-charts"></div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div
                    class="p-4 md:p-5 min-h-102.5 flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                    <!-- Header -->
                    <div class="flex flex-wrap justify-between items-center gap-2">
                        <div>
                            <h2 class="text-sm text-gray-500 dark:text-neutral-500">
                                Visitors
                            </h2>
                            <p class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                                0
                            </p>
                        </div>
                    </div>
                    <!-- End Header -->

                    <div id="hs-single-area-chart"></div>
                </div>
                <!-- End Card -->
            </div>
            <!-- End Charts Grid -->
        </div>
    </div>
</div>
