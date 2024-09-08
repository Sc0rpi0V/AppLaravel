@include('_nav')
@vite('resources/css/app.css')
@include('_head')

<div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg" style="margin-top: 120px; margin-bottom: 90px;">
    <h1 class="text-3xl font-bold mb-6 text-center">Demande de devis pour votre site WordPress</h1>

    <form action="{{ route('submit.quote') }}" method="POST">
        @csrf

        <!-- Nom du projet -->
        <div class="mb-4">
            <label for="project_name" class="block text-gray-700 font-medium mb-2">Quel est le nom de votre site ?</label>
            <input type="text" class="block w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200" id="project_name" name="project_name" placeholder="Nom du site" required>
        </div>

        <!-- Url du projet -->
        <div class="mb-4">
            <label for="project_url" class="block text-gray-700 font-medium mb-2">Quel est l'url de votre site ?</label>
            <input type="text" class="block w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200" id="project_url" name="project_url" placeholder="Url du site" required>
        </div>

        <!-- Type de projet -->
        <div class="mb-4">
            <label for="project_type" class="block text-gray-700 font-medium mb-2">Quel est le type de projet ?</label>
            <select class="block w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200" id="project_type" name="project_type" required>
                <option value="">Sélectionnez votre option</option>
                <option value="renovation">Rénovation du site</option>
                <option value="modification">Modification du site</option>
                <option value="maintenance">Maintenance du site</option>
            </select>
        </div>

        <!-- Objectifs du site web -->
        <div class="mb-4">
            <label for="site_goal" class="block text-gray-700 font-medium mb-2">Quel est l'objectif principal de votre site web ?</label>
            <select class="block w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200" id="site_goal" name="site_goal" required>
                <option value="">Sélectionnez votre option</option>
                <option value="blog">Blog</option>
                <option value="ecommerce">E-commerce</option>
                <option value="portfolio">Portfolio</option>
                <option value="vitrine">Site vitrine</option>
                <option value="forum">Forum</option>
                <option value="other">Autre (précisez ci-dessous)</option>
            </select>
            <textarea class="mt-2 block w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200" id="site_goal_details" name="site_goal_details" rows="2" placeholder="Si autre, veuillez préciser"></textarea>
        </div>

        <!-- Détails du projet -->
        <div class="mb-4">
            <label for="project_details" class="block text-gray-700 font-medium mb-2">Veuillez détailler votre projet :</label>
            <textarea class="block w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200" id="project_details" name="project_details" rows="4" required></textarea>
        </div>

        <!-- Plugins utilisés -->
        <div class="mb-4">
            <label for="plugins" class="block text-gray-700 font-medium mb-2">Plugins actuellement installés :</label>
            <textarea class="block w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200" id="plugins" name="plugins" rows="4" placeholder="Listez les plugins utilisés sur votre site"></textarea>
        </div>

        <!-- Thème utilisé -->
        <div class="mb-4">
            <label for="theme" class="block text-gray-700 font-medium mb-2">Quel thème utilisez-vous actuellement ?</label>
            <input type="text" class="block w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200" id="theme" name="theme" placeholder="Nom du thème" required>
        </div>

        <!-- Éditeur utilisé -->
        <div class="mb-4">
            <label for="editor" class="block text-gray-700 font-medium mb-2">Quel éditeur utilisez-vous ?</label>
            <select class="block w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200" id="editor" name="editor" required>
                <option value="">Sélectionnez votre option</option>
                <option value="classique">Éditeur Classique</option>
                <option value="gutenberg">Gutenberg</option>
            </select>
        </div>

        <!-- Blocs spécifiques -->
        <div class="mb-4">
            <label for="blocks" class="block text-gray-700 font-medium mb-2">Utilisez-vous des blocs spécifiques ?</label>
            <div class="flex flex-wrap gap-4">
                <div class="flex items-center">
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" id="acf_gutenberg" name="blocks[]" value="acf_gutenberg">
                    <label for="acf_gutenberg" class="ml-2 text-gray-700">Blocs ACF Gutenberg</label>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" id="react_gutenberg" name="blocks[]" value="react_gutenberg">
                    <label for="react_gutenberg" class="ml-2 text-gray-700">Blocs React Gutenberg</label>
                </div>
            </div>
        </div>

        <!-- Fonctionnalités supplémentaires -->
        <div class="mb-4">
            <label for="additional_features" class="block text-gray-700 font-medium mb-2">Avez-vous besoin de fonctionnalités supplémentaires ?</label>
            <div class="flex flex-wrap gap-4">
                <div class="flex items-center">
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" id="blog_feature" name="additional_features[]" value="blog">
                    <label for="blog_feature" class="ml-2 text-gray-700">Blog</label>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" id="gallery_feature" name="additional_features[]" value="gallery">
                    <label for="gallery_feature" class="ml-2 text-gray-700">Galerie</label>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" id="contact_form_feature" name="additional_features[]" value="contact_form">
                    <label for="contact_form_feature" class="ml-2 text-gray-700">Formulaire de contact</label>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" id="newsletter_feature" name="additional_features[]" value="newsletter">
                    <label for="newsletter_feature" class="ml-2 text-gray-700">Newsletter</label>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" id="multilingual_feature" name="additional_features[]" value="multilingual">
                    <label for="multilingual_feature" class="ml-2 text-gray-700">Multilingue</label>
                </div>
            </div>
        </div>

        <!-- Structure et contenu -->
        <div class="mb-4">
            <label for="pages_count" class="block text-gray-700 font-medium mb-2">Combien de pages votre site comprendra-t-il ?</label>
            <input type="number" class="block w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200" id="pages_count" name="pages_count" placeholder="Nombre de pages" required>
        </div>

        <div class="mb-4">
            <label for="content_ready" class="block text-gray-700 font-medium mb-2">Avez-vous déjà un contenu prêt (textes, images, vidéos) ?</label>
            <select class="block w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200" id="content_ready" name="content_ready" required>
                <option value="">Sélectionnez votre option</option>
                <option value="yes">Oui, tout est prêt</option>
                <option value="partial">En partie</option>
                <option value="no">Non, j'ai besoin d'aide pour créer du contenu</option>
            </select>
        </div>

        <!-- Performance et sécurité -->
        <div class="mb-4">
            <label for="speed_optimization" class="block text-gray-700 font-medium mb-2">Souhaitez-vous des optimisations pour la vitesse de chargement du site ?</label>
            <select class="block w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200" id="speed_optimization" name="speed_optimization" required>
                <option value="">Sélectionnez votre option</option>
                <option value="yes">Oui</option>
                <option value="no">Non</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="security_needs" class="block text-gray-700 font-medium mb-2">Avez-vous besoin de sécurité supplémentaire ?</label>
            <textarea class="block w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200" id="security_needs" name="security_needs" rows="4" placeholder="SSL, Protection anti-DDoS, Sauvegardes, etc."></textarea>
        </div>

        <!-- Compatibilité mobile -->
        <div class="mb-4">
            <label for="mobile_optimization" class="block text-gray-700 font-medium mb-2">Votre site doit-il être optimisé pour les mobiles ?</label>
            <select class="block w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200" id="mobile_optimization" name="mobile_optimization" required>
                <option value="">Sélectionnez votre option</option>
                <option value="yes">Oui, c'est essentiel</option>
                <option value="no">Non, ce n'est pas nécessaire</option>
            </select>
        </div>

        <!-- SEO et marketing -->
        <div class="mb-4">
            <label for="seo_services" class="block text-gray-700 font-medium mb-2">Avez-vous besoin de services de SEO ?</label>
            <select class="block w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200" id="seo_services" name="seo_services" required>
                <option value="">Sélectionnez votre option</option>
                <option value="audit">Audit SEO</option>
                <option value="onpage">Optimisation On-page</option>
                <option value="keywords">Recherche de mots-clés</option>
                <option value="analytics">Configuration Google Analytics</option>
            </select>
        </div>

        <!-- Hébergement et maintenance -->
        <div class="mb-4">
            <label for="hosting_needs" class="block text-gray-700 font-medium mb-2">Avez-vous déjà un hébergement pour votre site ?</label>
            <select class="block w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200" id="hosting_needs" name="hosting_needs" required>
                <option value="">Sélectionnez votre option</option>
                <option value="yes">Oui, j'ai un hébergeur</option>
                <option value="no">Non, j'ai besoin d'aide pour choisir un hébergeur</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="maintenance_services" class="block text-gray-700 font-medium mb-2">Souhaitez-vous un service de maintenance continue après la mise en ligne du site ?</label>
            <select class="block w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200" id="maintenance_services" name="maintenance_services" required>
                <option value="">Sélectionnez votre option</option>
                <option value="yes">Oui, pour les mises à jour et la sécurité</option>
                <option value="no">Non, je vais m'en occuper moi-même</option>
            </select>
        </div>

        <!-- Budget et délais -->
        <div class="mb-4">
            <label for="budget" class="block text-gray-700 font-medium mb-2">Quel est votre budget pour ce projet ?</label>
            <input type="text" class="block w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200" id="budget" name="budget" placeholder="Indiquez votre budget" required>
        </div>

        <div class="mb-4">
            <label for="timeline" class="block text-gray-700 font-medium mb-2">Quel est votre délai pour la réalisation de ce projet ?</label>
            <input type="text" class="block w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200" id="timeline" name="timeline" placeholder="Délai souhaité" required>
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white font-bold py-3 rounded-lg hover:bg-blue-700 transition duration-300">Soumettre</button>
    </form>
</div>

@include('_footer')

