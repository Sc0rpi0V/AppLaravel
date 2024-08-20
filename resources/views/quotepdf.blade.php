<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devis - {{ $quote->project_name }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            color: #0056b3;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        h2 {
            font-size: 18px;
            margin-top: 20px;
            margin-bottom: 10px;
        }
        p {
            line-height: 1.6;
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f8f8f8;
            color: #0056b3;
            font-weight: bold;
        }
        tfoot {
            background-color: #f1f1f1;
            font-weight: bold;
        }
        .table-title {
            margin-top: 30px;
            font-size: 20px;
            color: #333;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Devis pour {{ $quote->project_name }}</h1>
        <p><strong>URL du site:</strong> {{ $quote->project_url }}</p>
        <p><strong>Type de projet:</strong> {{ $quote->project_type }}</p>
        <p><strong>Objectif du site:</strong> {{ $quote->site_goal }} {{ $quote->site_goal_details ? '(' . $quote->site_goal_details . ')' : '' }}</p>
        <p><strong>Nombre de pages:</strong> {{ $quote->pages_count }}</p>
        <p><strong>Budget estimé:</strong> {{ $quote->budget }} €</p>
        <p><strong>Délai souhaité:</strong> {{ $quote->timeline }}</p>
        
        <h2>Détails du projet</h2>
        <p>{{ $quote->project_details }}</p>
        
        <h2>Plugins installés</h2>
        <p>{{ $quote->plugins ?: 'Aucun plugin spécifié' }}</p>
        
        <h2>Thème actuel</h2>
        <p>{{ $quote->theme }}</p>
        
        <h2>Éditeur utilisé</h2>
        <p>{{ $quote->editor }}</p>
        
        <h2>Blocs spécifiques</h2>
        <p>{{ empty($quote->blocks) ? 'Aucun bloc spécifique utilisé' : implode(', ', json_decode($quote->blocks)) }}</p>
        
        <h2>Fonctionnalités supplémentaires</h2>
        <p>{{ empty($quote->additional_features) ? 'Aucune fonctionnalité supplémentaire' : implode(', ', json_decode($quote->additional_features)) }}</p>
        
        <h2>Contenu déjà prêt ?</h2>
        <p>{{ $quote->content_ready }}</p>
        
        <h2>Optimisation pour la vitesse</h2>
        <p>{{ $quote->speed_optimization == 'yes' ? 'Oui, optimisations nécessaires' : 'Non, pas d\'optimisation nécessaire' }}</p>
        
        <h2>Besoin de sécurité supplémentaire</h2>
        <p>{{ $quote->security_needs ?: 'Aucune sécurité supplémentaire demandée' }}</p>
        
        <h2>Optimisation pour mobile</h2>
        <p>{{ $quote->mobile_optimization == 'yes' ? 'Oui, site optimisé pour mobile' : 'Non, pas d\'optimisation mobile nécessaire' }}</p>
        
        <h2>Services SEO</h2>
        <p>{{ $quote->seo_services }}</p>
        
        <h2>Hébergement du site</h2>
        <p>{{ $quote->hosting_needs == 'yes' ? 'Oui, un hébergeur est déjà choisi' : 'Non, assistance nécessaire pour choisir un hébergeur' }}</p>
        
        <h2>Service de maintenance</h2>
        <p>{{ $quote->maintenance_services == 'yes' ? 'Oui, maintenance continue nécessaire' : 'Non, pas de maintenance nécessaire' }}</p>

        <div class="table-title">Estimation des coûts</div>
        <table>
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Coût estimé</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Création/Mise à jour du site</td>
                    <td>{{ $quote->budget }} €</td>
                </tr>
                <tr>
                    <td>Optimisation de la vitesse</td>
                    <td>{{ $quote->speed_optimization == 'yes' ? '500€' : '0€' }}</td>
                </tr>
                <tr>
                    <td>Sécurité supplémentaire</td>
                    <td>{{ $quote->security_needs ? '200€' : '0€' }}</td>
                </tr>
                <tr>
                    <td>Optimisation mobile</td>
                    <td>{{ $quote->mobile_optimization == 'yes' ? '300€' : '0€' }}</td>
                </tr>
                <tr>
                    <td>Services SEO</td>
                    <td>Varie en fonction des services choisis</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td>Total estimé</td>
                    <td>{{ $quote->totalCost }} €</td>
                </tr>
            </tfoot>
        </table>
    </div>
</body>
</html>
