<?php

namespace App\Http\Controllers;

use App\Models\DiskUsage;

class ReportingController extends Controller
{
    public function index()
    {
        // Récupére l'espace disque total et disponible
        $diskTotalSpace = disk_total_space("/");
        $diskFreeSpace = disk_free_space("/");

        // Utilisation mémoire actuelle
        $memoryUsage = memory_get_usage();
        
        // Taille du répertoire
        $storagePath = storage_path();
        $directorySize = $this->getDirectorySize($storagePath);

        DiskUsage::create([
            'total_space' => $diskTotalSpace,
            'free_space'  => $diskFreeSpace,
            'memory_usage' => $memoryUsage,
        ]);

        // Récupére les dernières données pour le graphique
        $diskUsages = DiskUsage::orderBy('created_at', 'asc')->get();

        return view('_reports-admin', compact('diskTotalSpace', 'diskFreeSpace', 'memoryUsage', 'directorySize', 'diskUsages'));
    }

    private function getDirectorySize($directory)
    {
        $size = 0;
    
        foreach (glob(rtrim($directory, '/').'/*', GLOB_NOSORT) as $file) {
            $size += is_file($file) ? filesize($file) : $this->getDirectorySize($file);
        }
    
        return $size;
    }
}