
let language;

document.addEventListener('DOMContentLoaded', function () {
    const select = document.getElementById('language-picker-select');

    // Fonction pour mettre à jour l'image du sélecteur
    function updateSelectImage() {
        const selectedOption = select.options[select.selectedIndex];
        const selectedImage = selectedOption.dataset.image;
        select.style.backgroundImage = `url(${selectedImage})`;
    }

    // Fonction pour changer la langue
    function changeLanguage(newLanguage) {
        language = newLanguage; // Mettre à jour la variable language globale

        const elementsToTranslate = document.querySelectorAll('[data-key]');
        elementsToTranslate.forEach(element => {
            const key = element.getAttribute('data-key');
            if (translations[language] && translations[language][key]) {
                element.textContent = translations[language][key];
            }
        });

        // Mettre à jour le texte du lien "More"
        const moreLink = document.querySelector('.more-menu a.a-top-link');
        if (moreLink) {
            moreLink.textContent = translations[language]['more_text'];
        }

        // Enregistrer le cookie
        document.cookie = `language=${language};path=/`;
        // console.log(document.cookie);
    }

    // Met à jour l'image lors du chargement de la page
    updateSelectImage();

    // Met à jour l'image et la langue lorsque la sélection change
    select.addEventListener('change', function () {
        updateSelectImage();
        const selectedLanguage = select.value;
        // console.log('Language changed to:', selectedLanguage);  // Ajouté pour le débogage
        changeLanguage(selectedLanguage);
    });

    // Initialiser la langue par défaut
    const cookies = document.cookie.split(';');
    for (let i = 0; i < cookies.length; i++) {
        const cookie = cookies[i].trim().split('=');
        if (cookie[0] === 'language') {
            language = cookie[1];
            break;
        }
    }

    language = language || select.value;
    // console.log('Default language:', language);  // Ajouté pour le débogage
    changeLanguage(language);
});
