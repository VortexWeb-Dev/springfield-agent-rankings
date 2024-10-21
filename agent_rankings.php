<?php include('includes/header.php'); ?>
<?php include('includes/sidebar.php'); ?>

<div class="w-[80%] bg-gray-100 p-4">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Monthly Ranking -->
            <div class="bg-white p-6 rounded-lg shadow-sm h-[400px] flex flex-col gap-1">
                <h2 class="text-xl font-semibold mb-6">Monthly Ranking</h2>
                <div class="mb-2">
                    <label for="monthly-agent" class="block text-sm font-medium text-gray-700 mb-2">Agent Name</label>
                    <input type="text" id="monthly-agent" name="monthly-agent" class="mt-1 block w-full border-b border-gray-400">
                </div>
                <!-- Add more content for monthly ranking here -->
                <div class="overflow-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Month</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rank</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sales</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">January</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">3</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$50,000</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">February</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$55,000</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">March</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">1</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$60,000</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">March</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">1</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$60,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Quaterly Ranking -->
            <div class="bg-white p-6 rounded-lg shadow-sm h-[400px] flex flex-col gap-1">
                <h2 class="text-xl font-semibold mb-6">Quaterly Ranking</h2>
                <div class="mb-2">
                    <label for="quaterly-agent" class="block text-sm font-medium text-gray-700 mb-2">Agent Name</label>
                    <input type="text" id="quaterly-agent" name="quaterly-agent" class="mt-1 block w-full border-b border-gray-400">
                </div>
                <!-- Add more content for quaterly ranking here -->
                <div class="overflow-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quarter</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rank</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sales</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Q1</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$165,000</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Q2</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">1</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$180,000</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Q3</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">3</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$155,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Yearly Ranking -->
            <div class="bg-white p-6 rounded-lg shadow-sm h-[400px] flex flex-col gap-1">
                <h2 class="text-xl font-semibold mb-6">Yearly Ranking</h2>
                <div class="mb-2">
                    <label for="yearly-agent" class="block text-sm font-medium text-gray-700 mb-2">Agent Name</label>
                    <input type="text" id="yearly-agent" name="yearly-agent" class="mt-1 block w-full border-b border-gray-400">
                </div>
                <!-- Add more content for yearly ranking here -->
                <div class="overflow-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Year</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rank</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sales</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2021</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">3</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$500,000</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2022</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">1</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$650,000</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2023</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$600,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include('includes/footer.php'); ?>