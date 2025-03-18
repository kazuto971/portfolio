<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Mathias Adames</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-dark fixed-top">
        <ul class="nav justify-content-center w-100">
            <li class="nav-item"><a class="nav-link text-white" href="#accueil">Accueil</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#a-propos">À Propos</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#competences">Compétences</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#projets">Projets</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#contact">Contact</a></li>
        </ul>
    </nav>

    <!-- Section Accueil -->
    <section id="accueil" class="welcome-section">
        <h1 class="display-3">Portfolio</h1>
        <h2 class="display-5">Mathias Adames</h2>
    </section>

    <!-- Section À propos -->
    <section id="a-propos" class="about-section">
        <div class="row">
            <div class="col-12 col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">À Propos de Moi</h5>
                        <p class="card-text">
                            Je suis <strong>Mathias Adames</strong>, étudiant en BTS SIO option SLAM. Passionné par le développement logiciel et web, j’ai acquis des compétences solides en programmation, gestion de bases de données et conception logicielle.
                            Mon objectif est de continuer à me perfectionner dans le domaine de l'informatique et de travailler sur des projets innovants.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Le BTS SIO - Option SLAM</h5>
                        <p class="card-text">
                            Le <strong>BTS Services Informatiques aux Organisations</strong> (SIO) est une formation en deux ans qui prépare aux métiers de l'informatique.
                            <ul>
                                <li>Développement d’applications web et mobiles</li>
                                <li>Gestion et exploitation des bases de données</li>
                                <li>Conception et maintenance de logiciels</li>
                                <li>Gestion de projets informatiques</li>
                            </ul>
                            <strong>Débouchés</strong> : Développeur d’applications, Analyste programmeur, Administrateur de bases de données.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Compétences -->
    <section id="competences">
    <h2>Mes Compétences</h2>
    <div class="competences-grid">
        <?php
        require_once 'models/Model.php'; // Inclure le fichier contenant la méthode getCompetences()
        $competences = Model::getCompetences(); // Récupérer les compétences
        foreach ($competences as $competence) {
            echo "
            <div class='competence'>
                <div class='competence-icon'>
                    <img src='{$competence['image']}' alt='{$competence['nom']}'>
                </div>
                <div class='competence-info'>
                    <h4>{$competence['nom']}</h4>
                    <div class='progress'>
                        <div class='progress-bar' style='width: {$competence['niveau']}%;'>{$competence['niveau']}%</div>
                    </div>
                </div>
            </div>";
        }
        ?>
    </div>
</section>

    <!-- Section Projets -->
    <section id="projets">
        <h2>Mes Projets</h2>
        <div class="projets-grid">
            <?php
            require_once 'models/Model.php';
            foreach (Model::getProjets() as $projet) {
                echo "
                <div class='projet-card'>
                    <img src='{$projet['image']}' alt='{$projet['titre']}'>
                    <div class='projet-info'>
                        <h3>{$projet['titre']}</h3>
                        <p>{$projet['description']}</p>
                        <a href='{$projet['lien']}' class='btn btn-primary' target='_blank'>Voir le projet</a>
                    </div>
                </div>";
            }
            ?>
        </div>
    </section>

    <!-- Section Contact -->
    <section id="contact">
        <h2>Me Contacter</h2>
        <p>Pour toute demande, n'hésitez pas à me contacter :</p>
        <ul class="list-unstyled">
            <li><i class="fas fa-envelope"></i> Email : <a href="mailto:mathias.adames@example.com">mathias.adames@example.com</a></li>
            <li><i class="fab fa-linkedin"></i> LinkedIn : <a href="https://www.linkedin.com/in/alic-mathias-adames-863285290/" target="_blank">Mon profil</a></li>
            <li><i class="fab fa-github"></i> GitHub : <a href="https://github.com/MathiasAdames" target="_blank">Mon GitHub</a></li>
        </ul>

        <h3>Formulaire de Contact</h3>
        <form action="controllers/contact.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center p-3">
        <p>&copy; 2025 Mathias Adames - BTS SIO SLAM</p>
        <div class="social-icons">
            <a href="https://dinosaurgame.app"><img src="public/images/facebook-icon.png" alt="Facebook"></a>
            <a href="https://www.instagram.com/kazuto_971/"><img src="public/images/instagram-icon.png" alt="Instagram"></a>
            <a href="https://x.com/?logout=1726592186033"><img src="public/images/twitter-icon2.png" alt="Twitter"></a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // JavaScript pour la navbar
        window.addEventListener('scroll', function () {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.backgroundColor = 'rgba(0, 0, 0, 0.9)';
            } else {
                navbar.style.backgroundColor = 'rgba(0, 0, 0, 0.7)';
            }
        });

        // JavaScript pour mettre en évidence le lien actif
        window.addEventListener('scroll', function () {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-link');

            sections.forEach((section, index) => {
                const rect = section.getBoundingClientRect();
                if (rect.top <= 100 && rect.bottom >= 100) {
                    navLinks.forEach(link => link.classList.remove('active'));
                    navLinks[index].classList.add('active');
                }
            });
        });
    </script>
</body>
</html>