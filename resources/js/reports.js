document.addEventListener('DOMContentLoaded', function() {
    var ctxDisk = document.getElementById('diskUsageChart').getContext('2d');
    var diskUsageChart = new Chart(ctxDisk, {
        type: 'line',
        data: {
            labels: diskUsageLabels, 
            datasets: [{
                label: 'Espace total (Go)',
                data: diskUsageTotalSpace,
                borderColor: 'rgba(75, 192, 192, 1)',
                fill: false
            },
            {
                label: 'Espace libre (Go)',
                data: diskUsageFreeSpace,
                borderColor: 'rgba(255, 99, 132, 1)',
                fill: false
            }]
        },
        options: {
            responsive: true,
            title: {
                display: true,
                text: 'Évolution de l\'espace disque'
            }
        }
    });

    var ctxMemory = document.getElementById('memoryUsageChart').getContext('2d');
    var memoryUsageChart = new Chart(ctxMemory, {
        type: 'line',
        data: {
            labels: diskUsageLabels,
            datasets: [{
                label: 'Utilisation mémoire (Mo)',
                data: memoryUsageData,
                borderColor: 'rgba(153, 102, 255, 1)',
                fill: false
            }]
        },
        options: {
            responsive: true,
            title: {
                display: true,
                text: 'Évolution de l\'utilisation mémoire'
            }
        }
    });

    var ctxDirSize = document.getElementById('memoryDirectorySize').getContext('2d');
    var memoryDirectorySize = new Chart(ctxDirSize, {
        type: 'line',
        data: {
            labels: diskUsageLabels,
            datasets: [{
                label: 'Taille du répertoire (Mo)',
                data: [directorySize], 
                borderColor: 'rgba(153, 102, 255, 1)',
                fill: false
            }]
        },
        options: {
            responsive: true,
            title: {
                display: true,
                text: 'Évolution de la taille du répertoire'
            }
        }
    });
});
