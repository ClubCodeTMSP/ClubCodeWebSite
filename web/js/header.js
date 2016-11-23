function displayActiveTab(name){
    $(".tab").removeClass("active");
    switch (name) {
        case "accueil":
            //afficher les projets de développement web (cacher class="projet" puis montrer class="web")
            $("#accueil").addClass("active");
            break;
        case "presentation":
            //afficher les projets de développement web (cacher class="projet" puis montrer class="application")
            $("#presentation").addClass("active");
            break;
        case "calendrier":
            //afficher les projets de développement web (cacher class="projet" puis montrer class="application")
            $("#calendrier").addClass("active");
            break;
        case "activites":
            //afficher les projets de développement web (cacher class="projet" puis montrer class="application")
            $("#activites").addClass("active");
            break;
        case "projets":
            //afficher les projets de développement web (cacher class="projet" puis montrer class="application")
            $("#projets").addClass("active");
            break;
        case "contact":
            //afficher les projets de développement web (cacher class="projet" puis montrer class="application")
            $("#contact").addClass("active");
            break;
    }
}


