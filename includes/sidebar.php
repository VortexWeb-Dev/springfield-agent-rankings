<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<div class="sidebar bg-gray-800 text-white min-h-screen flex flex-col justify-between w-[15%]">
    <div class="py-6">
        <h1 class="text-2xl font-bold mb-8 text-white text-center hover:text-gray-300">
            <a href="agent_rankings.php">Dashboard</a>
        </h1>
        <ul class="flex flex-col gap-2">
            <li class="text-sm">
                <a href="agent_rankings.php" class="block p-2 rounded transition duration-200 hover:bg-gray-700 <?php echo $current_page === 'agent_rankings.php' ? 'bg-gray-700' : ''; ?>">
                    <i class="fas fa-trophy mr-2"></i> Agent Ranking
                </a>
            </li>
        </ul>
    </div>
    <div class="p-6 text-sm text-gray-400 text-center">
        © <?= date('Y') ?> SpringField.
    </div>
</div>
