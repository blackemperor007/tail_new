const translations = {
    fr: {
        // Navigation
        "home": "Accueil",
        "solutions": "Solutions",
        "subscription": "Abonnement",
        "packages": "Bouquets",
        "support": "Support",
        "contact": "Contact",
        "getStarted": "Commencer",

        // Solutions menu
        "vehicleLeasing": "Leasing de véhicules",
        "vehicleTracking": "Suivi des véhicules en location",
        "smartAgriculture": "Agriculture intelligente",
        "cropControl": "Contrôle des cultures avec Hecterra",
        "fleetManagement": "Gestion des flottes",
        "deliveryManagement": "Gestion des processus de livraison",
        
        // Common sections
        "readMore": "En savoir plus",
        "requestDemo": "Demander une démo",
        "startNow": "Commencer maintenant",

        // Contact Form
        "fullName": "Nom complet",
        "email": "Email",
        "subject": "Sujet",
        "message": "Message",
        "sendMessage": "Envoyer le message",
        "successMessage": "Votre message a été envoyé avec succès !",
        "errorMessage": "Une erreur s'est produite. Veuillez réessayer.",
        "requiredField": "Ce champ est requis",
        "invalidEmail": "Veuillez entrer une adresse email valide",
    },
    en: {
        // Navigation
        "home": "Home",
        "solutions": "Solutions",
        "subscription": "Subscription",
        "packages": "Packages",
        "support": "Support",
        "contact": "Contact",
        "getStarted": "Get Started",

        // Solutions menu
        "vehicleLeasing": "Vehicle Leasing",
        "vehicleTracking": "Vehicle Location Tracking",
        "smartAgriculture": "Smart Agriculture",
        "cropControl": "Crop Control with Hecterra",
        "fleetManagement": "Fleet Management",
        "deliveryManagement": "Delivery Process Management",
        
        // Common sections
        "readMore": "Read More",
        "requestDemo": "Request Demo",
        "startNow": "Start Now",

        // Contact Form
        "fullName": "Full Name",
        "email": "Email",
        "subject": "Subject",
        "message": "Message",
        "sendMessage": "Send Message",
        "successMessage": "Your message has been sent successfully!",
        "errorMessage": "An error occurred. Please try again.",
        "requiredField": "This field is required",
        "invalidEmail": "Please enter a valid email address",
    }
    // Ajoutez d'autres langues ici
};

// Fonction pour changer la langue
function changeLanguage(lang) {
    // Sauvegarder la langue sélectionnée dans localStorage
    localStorage.setItem('selectedLanguage', lang);
    
    // Sélectionner tous les éléments avec l'attribut data-i18n
    document.querySelectorAll('[data-i18n]').forEach(element => {
        const key = element.getAttribute('data-i18n');
        if (translations[lang] && translations[lang][key]) {
            // Si c'est un élément input avec un placeholder
            if (element.placeholder) {
                element.placeholder = translations[lang][key];
            } else {
                element.textContent = translations[lang][key];
            }
        }
    });

    // Mettre à jour la direction du texte pour les langues RTL
    document.documentElement.dir = ['ar', 'ur'].includes(lang) ? 'rtl' : 'ltr';
}

// Initialiser la langue au chargement de la page
document.addEventListener('DOMContentLoaded', () => {
    const savedLanguage = localStorage.getItem('selectedLanguage') || 'fr';
    const languageSelect = document.getElementById('languageSelect');
    if (languageSelect) {
        languageSelect.value = savedLanguage;
    }
    changeLanguage(savedLanguage);
});

// Exporter les fonctions et objets nécessaires
window.translations = translations;
window.changeLanguage = changeLanguage; 