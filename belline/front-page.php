<?php
/**
 * The front page template file
 */

get_header(); ?>

<main id="primary" class="site-main">

    <style>
        .spa-container {
            display: flex;
            max-width: 1200px;
            margin: 20px auto;
            gap: 20px;
            align-items: flex-start;
        }
        .navigation-grid {
            display: flex;
            flex-direction: column;
            gap: 10px;
            flex: 0 0 auto;
        }
        .spa-button {
            cursor: pointer;
            border: none;
            background: none;
            padding: 0;
            transition: transform 0.2s;
        }
        .spa-button:hover {
            transform: scale(1.05);
        }
        .spa-button img {
            display: block;
        }
        .spa-content-section {
            display: none;
            animation: fadeIn 0.5s;
        }
        .spa-content-section.active {
            display: block;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        /* Form styling */
        .belline-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            max-width: 600px;
            margin: 20px auto;
            text-align: left;
        }
        .belline-form-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }
        .belline-form-group label {
            font-weight: bold;
            font-style: italic;
            flex: 1;
        }
        .belline-form-group input[type="text"],
        .belline-form-group input[type="email"],
        .belline-form-group select,
        .belline-form-group textarea,
        .belline-form-group input[type="file"] {
            flex: 2;
            padding: 5px;
        }
        .belline-form-group.radio-group {
            flex: 2;
            display: flex;
            flex-direction: column;
        }
        .belline-form-group.radio-group label {
            font-weight: normal;
            font-style: normal;
            flex: none;
        }
        .submit-btn-container {
            text-align: center;
            margin-top: 20px;
        }
        .submit-btn {
            padding: 10px 20px;
            background-color: white;
            color: black;
            border: 1px solid #ccc;
            cursor: pointer;
            font-weight: bold;
        }
    </style>

    <div class="spa-container">
    <div class="navigation-grid">
        <button class="spa-button" data-target="accueil" aria-label="Accueil" style="margin-bottom: 10px;"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Accueil_blue.png" alt="Accueil" style="margin: 0 auto;"></button>
        <div style="text-align: center; color: yellow; font-style: italic; font-weight: bold; margin-bottom: 10px; font-size: 1.2em;">Version PC</div>

        <button class="spa-button" data-target="gratuite" aria-label="Voyance Gratuite"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Gratuite.png" alt="Voyance Gratuite"></button>
        <button class="spa-button" data-target="mail" aria-label="Consultation par Mail"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/02_mail.png" alt="Consultation par Mail"></button>
        <button class="spa-button" data-target="tchat" aria-label="Consultation par Tchat"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/03_tchat.png" alt="Consultation par Tchat"></button>
        <button class="spa-button" data-target="magie" aria-label="Magie Blanche"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Magie_blanche.png" alt="Magie Blanche"></button>
        <button class="spa-button" data-target="coaching" aria-label="Coaching"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/05_coaching.png" alt="Coaching"></button>
        <button class="spa-button" data-target="domicile" aria-label="Consultation à domicile"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/06_a_domicile.png" alt="Consultation à domicile"></button>
        <button class="spa-button" data-target="dons" aria-label="Vos Dons"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/07_vos_dons.png" alt="Vos Dons"></button>
        <button class="spa-button" data-target="cartes32" aria-label="Jeu de 32 Cartes"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/08_32_cartes.png" alt="Jeu de 32 Cartes"></button>
        <button class="spa-button" data-target="belline" aria-label="Oracle Belline"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/09_oracle_belline.png" alt="Oracle Belline"></button>
        <button class="spa-button" data-target="tarots" aria-label="Les Tarots"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/10_les_tarots.png" alt="Les Tarots"></button>
        <button class="spa-button" data-target="methodes" aria-label="Méthodes"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Methodes.png" alt="Méthodes"></button>
        <button class="spa-button" data-target="planetes" aria-label="Planètes"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Planetes.png" alt="Planètes"></button>
    </div>

    <div class="content-area" style="flex: 1; padding: 20px; color: #fff; background: rgba(0,0,0,0.6); border-radius: 10px; border: 1px solid #c0a062; text-align: center;">

        <!-- Welcome (Default Content based on original prompt) -->
        <div id="content-accueil" class="spa-content-section active">
            <h1 style="color: yellow; font-style: italic;">Bienvenue sur mon site de voyance, de magie blanche et de coaching personnel</h1>
            <p style="font-style: italic; font-weight: bold;">votre destination privilégiée pour explorer l'univers mystérieux de la clairvoyance et de la spiritualité. Que vous soyez en quête de réponses à des questions personnelles, professionnelles ou sentimentales, je suis expérimenté et là pour vous guider avec bienveillance et précision.</p>

            <p style="font-style: italic; font-weight: bold;">Ici pas de tarif, je vous offre la possibilité d'avoir recours aux dons en fonction de votre degré de satisfaction mais dans la limite du raisonnable... Je vous invite à vous rapprocher de la rubrique dédiée à cet effet et à prendre connaissance de la moyenne de ce que mes consultants m'offrent en contrepartie de mes séances.</p>

            <h2 style="color: yellow; font-style: italic; margin-top: 30px;">Les consultations,</h2>

            <p style="font-style: italic; font-weight: bold;">La voyance et la magie blanche sont deux pratiques spirituelles qui s’entrelacent pour offrir des outils puissants d’orientation et de transformation personnelle. La magie blanche, souvent associée à des intentions bienveillantes, utilise des rituels et des énergies positives pour favoriser l’harmonie, la protection et la réussite. Elle vise à créer un environnement propice à l’épanouissement et à la réalisation des désirs.</p>

            <p style="font-style: italic; font-weight: bold;">La voyance permet d’accéder à des connaissances cachées et de percevoir des éléments du passé, du présent ou de l’avenir. Grâce à la cartomancie, je vous offre des éclairages précieux sur les choix à faire et les chemins à emprunter.</p>

            <p style="font-style: italic; font-weight: bold;">La magie blanche est associée à des pratiques spirituelles ou ésotériques qui visent à apporter des bienfaits, à protéger... Elle est généralement perçue comme une forme de magie positive, utilisée pour des intentions altruistes. Par exemple, elle peut être utilisée pour : Protéger et céer des sorts ou des rituels de protection contre les énergies négatives, aider l'émotionnelle, attirer l’amour, favoriser la prospérité et aider à rétablir l’harmonie et l’équilibre dans divers aspects de la vie.</p>

            <p style="font-style: italic; font-weight: bold;">Le coaching spirituel est un soutien qui vise à vous accompagner dans l’exploration et le développement de votre moi spirituel. Cela inclut la recherche de sens dans votre existence, la connexion avec votre être intérieur, l’harmonisation avec vos valeurs et croyances ainsi que votre épanouissement personnel.</p>

            <p style="font-style: italic; font-weight: bold;">En combinant ces disciplines, il est possible de non seulement comprendre les défis et les opportunités qui se présentent, mais aussi d’invoquer des énergies bénéfiques pour favoriser des résultats positifs. Que vous cherchiez à clarifier votre chemin de vie, à attirer l’amour, ou à surmonter des obstacles, la magie blanche, la voyance et le coaching spirituel peuvent vous guider vers un avenir radieux.</p>

            <p style="font-style: italic; font-weight: bold;">Découvrez mes services de consultations par mail, par tchat ainsi qu'en matière de coaching spirituel et laissez la magie, les cartes et la spiritualité vous éclairer sur votre chemin. Osez la découverte de vous-même et de votre avenir avec confiance et sérénité.</p>

            <p style="font-style: italic; font-weight: bold;">Votre avenir n'est pas figé, mais il est le fruit de vos choix et de vos intentions.<br>
            En prenant conscience de votre pouvoir personnel et en écoutant les conseils que je vous offre, vous pourrez prendre des décisions éclairées et vous épanouir.</p>

            <p style="font-style: italic; font-weight: bold;">Je vous invite à poser vos questions, à partager vos préoccupations, et ensemble, nous explorerons les chemins qui s'offrent à vous.</p>

            <p style="font-style: italic; font-weight: bold; color: yellow;">Votre voyage vers l'épanouissement commence ici !</p>

            <h2 style="color: yellow; font-style: italic; margin-top: 30px;">Mes prestations,</h2>

            <p style="font-style: italic; font-weight: bold;">Vous pouvez me poser votre question de voyance gratuitement par mail ou tchat (rdv).<br>
            <span style="color: yellow;">(Offre réservée aux nouveaux consultants et valable une seule fois)</span></p>

            <p style="font-style: italic; font-weight: bold;">Pour une consultation detaillée de voyance par mail et selon votre problèmatique, je vous réponds sous quelques minutes ou quelques heures suivant mes disponibilités.</p>

            <p style="font-style: italic; font-weight: bold;">Pour une consultation de voyance détaillée par tchat, d'une demi heure ou d'une heure environ et selon votre problèmatique, je vous reçois de 8h à 21h sur rdv.</p>

            <p style="font-style: italic; font-weight: bold;">Dans le domaine de la magie blanche, je vous reçois de de 8h à 21h par tchat sur rdv.</p>

            <p style="font-style: italic; font-weight: bold;">Dans le cadre de mon coaching spirituel, je vous reçois de 8h à 21h par tchat sur rdv.</p>

            <p style="font-style: italic; font-weight: bold;">Exceptionnel : Je vous propose de me déplacer à votre domicile dans un rayon de 15 kms aux alentours de Saint Florent sur Cher (à 20 kms de la ville de Bourges dans le département du Cher 18000) de 8h à 19h sur rendez-vous.</p>

            <p style="font-style: italic; font-weight: bold;">Découvrez également mon interprétation des lames de l'Oracle Belline, du jeu de 32 cartes, ainsi que des arcanes majeurs du Tarot de Marseille.</p>

            <p style="font-style: italic; font-weight: bold;">Je souhaite vous exprimer ma gratitude pour la confiance que vous m'accordez, car vous êtes de plus en plus nombreux à faire appel à mes services chaque jour.</p>

            <p style="font-style: italic; font-weight: bold;">Stéphane.</p>
        </div>

        <!-- Voyance Gratuite Content -->
        <div id="content-gratuite" class="spa-content-section">
            <h2 style="color: yellow; font-style: italic;">Consultation gratuite par Mail / Tchat</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cadeau.png" alt="Cadeau" style="margin: 20px auto; display: block; max-width: 150px;">

            <p style="font-style: italic; font-weight: bold;">Bienvenue à cette séance de cartomancie gratuite ! Nous allons explorer ensemble les messages que l'Oracle Belline ont à vous transmettre.</p>
            <p style="font-style: italic; font-weight: bold;">Cette séance est une opportunité rapide pour éclairer vos pensées, répondre à une question précise ou simplement vous donner un aperçu des énergies qui vous entourent. N'hésitez pas à formuler à exprimer une préoccupation particulière.</p>
            <p style="font-style: italic; font-weight: bold;">Gardez à l'esprit que ce moment est avant tout un espace de découverte et d'introspection. Je vous invite à accueillir les messages des cartes.</p>
            <p style="font-style: italic; font-weight: bold;">Consultation par Mail, réponse sous quelques minutes ou sous quelques heures ainsi que par Tchat sur rendez-vous (durée 10 minutes).</p>

            <p style="color: yellow; font-style: italic; font-weight: bold;">(Offre réservée aux nouveaux consultants valable une seule fois)</p>
            <p style="font-style: italic; font-weight: bold;">Stéphane.</p>

            <form class="belline-form" method="POST" action="" enctype="multipart/form-data">
                <div class="belline-form-group">
                    <label>Votre prénom</label>
                    <input type="text" name="prenom" required>
                </div>
                <div class="belline-form-group">
                    <label>Votre adresse mail</label>
                    <input type="email" name="email" required>
                </div>
                <div class="belline-form-group">
                    <label>Votre date de naissance</label>
                    <div style="flex: 2; display: flex; gap: 5px;">
                        <input type="date" name="date_naissance" required style="width: 100%;">
                    </div>
                </div>
                <div class="belline-form-group">
                    <label>Votre photo (recommandée)</label>
                    <input type="file" name="photo">
                </div>
                <div class="belline-form-group">
                    <label>Consultation par</label>
                    <div class="radio-group">
                        <label><input type="radio" name="type_consultation" value="mail" checked> Mail</label>
                        <label><input type="radio" name="type_consultation" value="tchat"> Tchat</label>
                    </div>
                </div>
                <div class="belline-form-group">
                    <label>Date du rendez-vous</label>
                    <div style="flex: 2; display: flex; gap: 5px;">
                        <input type="date" name="date_rdv" style="width: 100%;">
                    </div>
                </div>
                <div class="belline-form-group">
                    <label>Heure du rendez-vous</label>
                    <div style="flex: 2; display: flex; gap: 5px;">
                        <input type="time" name="heure_rdv" style="width: 100%;">
                    </div>
                </div>
                <div class="belline-form-group">
                    <label>Votre question concerne</label>
                    <select name="theme_question" style="flex: 2;">
                        <option value="amour">Amour</option>
                        <option value="travail">Travail</option>
                        <option value="argent">Argent</option>
                        <option value="famille">Famille</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>
                <div class="belline-form-group" style="align-items: flex-start;">
                    <label>Exposez moi votre problème précis</label>
                    <textarea name="probleme" rows="5" required></textarea>
                </div>
                <div class="submit-btn-container">
                    <button type="submit" class="submit-btn">Envoyer le<br>formulaire</button>
                </div>
            </form>
        </div>

        <!-- Mail Content -->
        <div id="content-mail" class="spa-content-section">
            <h2 style="color: yellow; font-style: italic;">Consultation détaillée par Mail</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arobase.png" alt="Mail" style="margin: 20px auto; display: block; max-width: 150px;">

            <p style="font-style: italic; font-weight: bold;">Dans un monde où les questions sur l'avenir, les relations et les choix de vie sont fréquentes, la voyance se présente comme un outil précieux pour obtenir des éclaircissements et des conseils.</p>

            <p style="font-style: italic; font-weight: bold;">La consultation de voyance par mail offre une solution moderne et accessible à tous ceux qui cherchent des réponses sans avoir à se déplacer. Grâce à cette méthode, vous pouvez poser votre question en toute confidentialité et recevoir une réponse personnalisée directement dans votre boîte de réception.</p>

            <p style="font-style: italic; font-weight: bold;">Que vous soyez curieux de connaître ce que l'avenir vous réserve ou que vous ayez besoin d'un soutien dans une période de questionnement, la voyance par mail vous permet d'explorer vos préoccupations à votre rythme, tout en bénéficiant de mon expertise en qualité de praticien qualifié.</p>

            <p style="color: yellow; font-style: italic; font-weight: bold;">Pour le paiement de cette consultation, rapprochez-vous de la rubrique "Dons"</p>
            <p style="font-style: italic; font-weight: bold;">Stéphane.</p>

            <form class="belline-form" method="POST" action="" enctype="multipart/form-data">
                <div class="belline-form-group">
                    <label>Votre prénom</label>
                    <input type="text" name="prenom" required>
                </div>
                <div class="belline-form-group">
                    <label>Votre adresse mail</label>
                    <input type="email" name="email" required>
                </div>
                <div class="belline-form-group">
                    <label>Votre date de naissance</label>
                    <div style="flex: 2; display: flex; gap: 5px;">
                        <input type="date" name="date_naissance" required style="width: 100%;">
                    </div>
                </div>
                <div class="belline-form-group">
                    <label>Votre photo (recommandée)</label>
                    <input type="file" name="photo">
                </div>
                <div class="belline-form-group">
                    <label>Votre question concerne</label>
                    <select name="theme_question" style="flex: 2;">
                        <option value="amour">Amour</option>
                        <option value="travail">Travail</option>
                        <option value="argent">Argent</option>
                        <option value="famille">Famille</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>
                <div class="belline-form-group" style="align-items: flex-start;">
                    <label>Exposez moi votre problème précis</label>
                    <textarea name="probleme" rows="5" required></textarea>
                </div>
                <div class="submit-btn-container">
                    <button type="submit" class="submit-btn">Envoyer le<br>formulaire</button>
                </div>
            </form>
        </div>

        <!-- Tchat Content -->
        <div id="content-tchat" class="spa-content-section">
            <h2 style="color: yellow; font-style: italic;">Consultation détaillée par Tchat</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tchat.png" alt="Tchat" style="margin: 20px auto; display: block; max-width: 150px;">

            <p style="font-style: italic; font-weight: bold;">La cartomancie est un outil puissant qui nous permet d'explorer les énergies qui vous entourent et d'accéder à des perspectives sur votre passé, votre présent et votre avenir.</p>

            <p style="font-style: italic; font-weight: bold;">Durant cette séance, nous allons utiliser l'Oracle Belline pour mieux comprendre vos préoccupations et vos aspirations. Les lames peuvent révéler des informations cachées et offrir des conseils précieux pour vous aider à prendre des décisions éclairées.</p>

            <p style="font-style: italic; font-weight: bold;">N'hésitez pas à partager vos questions ou vos intentions pour cette rencontre, car cela m'aidera à orienter mon tirage. Rappelez-vous que cette expérience est avant tout un moment de réflexion et d'introspection, où vous pourrez découvrir des éléments de votre cheminement personnel.</p>

            <p style="font-style: italic; font-weight: bold;">Ouvrons ensemble la porte à la sagesse des cartes et plongeons dans cette aventure...</p>

            <p style="font-style: italic; font-weight: bold;">N'hésitez pas à me contacter pour planifier votre séance et commencer cette belle aventure vers le futur et l'épanouissement personnel.</p>

            <p style="color: yellow; font-style: italic; font-weight: bold;">Pour le paiement de cette consultation, rapprochez-vous de la rubrique "Dons"</p>
            <p style="font-style: italic; font-weight: bold;">Stéphane.</p>

            <form class="belline-form" method="POST" action="" enctype="multipart/form-data">
                <div class="belline-form-group">
                    <label>Votre prénom</label>
                    <input type="text" name="prenom" required>
                </div>
                <div class="belline-form-group">
                    <label>Votre adresse mail</label>
                    <input type="email" name="email" required>
                </div>
                <div class="belline-form-group">
                    <label>Votre date de naissance</label>
                    <div style="flex: 2; display: flex; gap: 5px;">
                        <input type="date" name="date_naissance" required style="width: 100%;">
                    </div>
                </div>
                <div class="belline-form-group">
                    <label>Date du rendez-vous</label>
                    <div style="flex: 2; display: flex; gap: 5px;">
                        <input type="date" name="date_rdv" style="width: 100%;">
                    </div>
                </div>
                <div class="belline-form-group">
                    <label>Heure du rendez-vous</label>
                    <div style="flex: 2; display: flex; gap: 5px;">
                        <input type="time" name="heure_rdv" style="width: 100%;">
                    </div>
                </div>
                <div class="belline-form-group">
                    <label>Votre photo (recommandée)</label>
                    <input type="file" name="photo">
                </div>
                <div class="belline-form-group">
                    <label>Votre question concerne</label>
                    <select name="theme_question" style="flex: 2;">
                        <option value="amour">Amour</option>
                        <option value="travail">Travail</option>
                        <option value="argent">Argent</option>
                        <option value="famille">Famille</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>
                <div class="belline-form-group" style="align-items: flex-start;">
                    <label>Exposez moi votre problème précis</label>
                    <textarea name="probleme" rows="5" required></textarea>
                </div>
                <div class="submit-btn-container">
                    <button type="submit" class="submit-btn">Envoyer le<br>formulaire</button>
                </div>
            </form>
        </div>

        <!-- Magie Blanche Content -->
        <div id="content-magie" class="spa-content-section">
<div class="OESZ OESZ_DivContent OESZG_WE8bfb2a0fb0">
    <div style="text-align: center; margin-bottom: 20px;">
        <h2 style="color: #ffff00; font-style: italic; font-family: 'Times New Roman', Times, serif;">Consultation de Magie Blanche</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bougies.png" alt="Bougies" style="max-width: 200px; margin-top: 10px;">
    </div>

    <div style="text-align: center; font-style: italic; font-weight: bold; font-family: 'Times New Roman', Times, serif; line-height: 1.6; margin-bottom: 20px;">
        <p>La magie blanche est une pratique spirituelle bienveillante qui utilise des éléments naturels pour canaliser des énergies positives et favoriser l'harmonie dans la vie des individus. Au cœur de cette approche, on trouve des outils tels que les cristaux, les bougies et l'encens, chacun ayant ses propres propriétés et significations.</p>

        <p>Les cristaux sont des réceptacles d'énergie qui peuvent amplifier les intentions et favoriser vos domaines de prédilections. Chaque cristal possède des vibrations uniques et peut être utilisée pour des objectifs spécifiques, comme la protection, l'amour, le domaine professionnel, la clarté mentale... En les intégrant dans des rituels ou en les portant sur soi, on peut bénéficier de leurs effets apaisants et énergisants.</p>

        <p>Les bougies, quant à elles, jouent un rôle central dans la magie blanche. Elles sont souvent allumées lors de rituels pour symboliser l'illumination, la purification et l'intention. La couleur de la bougie choisie peut également avoir une signification particulière, renforçant ainsi le but du rituel. En se concentrant sur la flamme, on peut également méditer et se connecter à des énergies supérieures.</p>

        <p>L'encens, avec ses arômes envoûtants, est utilisé pour purifier l'espace et élever les vibrations durant les rituels. Il aide à créer une atmosphère propice à la méditation et à la concentration, tout en permettant de se relier aux mondes spirituels. Différents types d'encens correspondent à des intentions spécifiques, que ce soit par exemple, pour la protection, l'amour ou la prospérité.</p>

        <p>En somme, la magie blanche, enrichie par l'utilisation de cristaux, de bougies et d'encens, offre une palette d'outils puissants pour ceux qui souhaitent se connecter à leur essence spirituelle, améliorer leur quotidien et manifester leurs désirs dans un cadre de bienveillance et d'harmonie.</p>

        <p>Concernant le domaine sentimental, entre autre, la magie blanche est en mesure de vous aider à trouver l'amour, renforcer les relations existantes, nouer une amitié sincère...</p>

        <p>En ce qui concerne le secteur professionnel, elle a la capacité de vous remettre sur la bonne voie, de vous orienter dans votre recherche d'emploi, de vous aider à identifier des opportunités et de favoriser votre prospérité.</p>

        <p>Contrairement à la magie noire, la magie blanche est pratiquée dans le respect du libre arbitre et vise à apporter du bien-être et des énergies positives. Beaucoup d'autres domaines de prédilections existent en magie blanche.</p>

        <p>L'art de la magie ne se base pas sur des principes scientifiques rigoureux. Environ 5 à 7% des consultants ne sont pas réceptifs selon mes propres statistiques.</p>
    </div>

    <div style="text-align: center; margin-bottom: 20px;">
        <h2 style="color: #ffff00; font-style: italic; font-family: 'Times New Roman', Times, serif;">La séance :</h2>
    </div>

    <div style="text-align: center; font-style: italic; font-weight: bold; font-family: 'Times New Roman', Times, serif; line-height: 1.6; margin-bottom: 30px;">
        <p>Des entretiens <span style="color: #ffff00;">gratuits par mail</span> seront organisés pour aborder votre ou vos problèmatiques ainsi que vos souhaits et désirs.</p>

        <p>À l'issue de ces entretiens, nous organiserons une séance par <span style="color: #ffff00;">tchat</span> me permettant de sélectionner pour vous le cristal à magnétiser.</p>

        <p>Plusieurs possibilités vous serons donnés : colliers, pendentifs, boucles d'oreilles, pierre brute, etc... Ce cristal vous sera envoyée par "colissimo" ou enveloppe à bulle avec les incantations et recommandations à suivre. Elle sera expédiée à l'adresse que vous m'indiquerez ou en poste restante pour préserver votre anonymat.</p>

        <p>N'hésitez pas à me contacter pour planifier votre séance et commencer cette belle aventure vers le futur et l'épanouissement personnel.</p>

        <p>PS : Il est nécessaire de remagnétiser la pierre une fois par an. Il vous suffira de me la renvoyer, et je procéderai à son rechargement gratuitement (hors frais d'envoi).</p>

        <p style="color: #ffff00;">Pour le paiement de cette consultation, rapprochez-vous de la rubrique "Dons"</p>

        <p>Stéphane.</p>
    </div>

    <div style="font-family: 'Times New Roman', Times, serif; font-style: italic; font-weight: bold;">
        <form method="POST" action="" enctype="multipart/form-data">
            <table style="width: 100%; border-collapse: separate; border-spacing: 0 15px;">
                <tr>
                    <td style="text-align: right; padding-right: 20px; width: 40%;"><label for="magie-prenom">Votre prénom</label></td>
                    <td><input type="text" id="magie-prenom" name="prenom" style="width: 80%; padding: 5px;"></td>
                </tr>
                <tr>
                    <td style="text-align: right; padding-right: 20px;"><label for="magie-mail">Votre adresse mail</label></td>
                    <td><input type="email" id="magie-mail" name="mail" style="width: 80%; padding: 5px;" required></td>
                </tr>
                <tr>
                    <td style="text-align: right; padding-right: 20px;"><label for="magie-naissance">Votre date de naissance</label></td>
                    <td>
                        <input type="date" id="magie-naissance" name="date_naissance" style="padding: 5px;">
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right; padding-right: 20px;"><label for="magie-sexe">Sexe</label></td>
                    <td>
                        <select id="magie-sexe" name="sexe" style="padding: 5px;">
                            <option value="Homme">Homme</option>
                            <option value="Femme">Femme</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right; padding-right: 20px;"><label for="magie-photo">Votre photo (souhaitée)</label></td>
                    <td>
                        <input type="file" id="magie-photo" name="photo" accept="image/*" style="padding: 5px;">
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right; padding-right: 20px;"><label for="magie-date-rdv">Date du rendez-vous</label></td>
                    <td>
                        <input type="date" id="magie-date-rdv" name="date_rdv" style="padding: 5px;">
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right; padding-right: 20px;"><label for="magie-heure-rdv">Heure du rendez-vous</label></td>
                    <td>
                        <input type="time" id="magie-heure-rdv" name="heure_rdv" style="padding: 5px;">
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right; padding-right: 20px;"><label for="magie-question">Votre question concerne</label></td>
                    <td>
                        <select id="magie-question" name="domaine" style="padding: 5px;">
                            <option value="Amour">Amour</option>
                            <option value="Travail">Travail</option>
                            <option value="Argent">Argent</option>
                            <option value="Sante">Santé</option>
                            <option value="Autre">Autre</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right; padding-right: 20px; vertical-align: top;"><label for="magie-probleme">Exposez-moi votre problème précis</label></td>
                    <td>
                        <textarea id="magie-probleme" name="probleme" style="width: 80%; height: 150px; padding: 5px;"></textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" style="padding: 10px 20px; cursor: pointer; font-family: 'Times New Roman', Times, serif; font-style: italic; font-weight: bold;">Envoyer</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

        </div>

        <!-- Coaching Content -->
        <div id="content-coaching" class="spa-content-section">
<div class="OESZ OESZ_DivContent OESZG_WE8bfb2a0fb0">
    <div style="text-align: center; margin-bottom: 20px;">
        <h2 style="color: #ffff00; font-style: italic; font-family: 'Times New Roman', Times, serif;">Coaching spirituel</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/spirituel.png" alt="Coaching spirituel" style="max-width: 200px; margin-top: 10px;">
    </div>

    <div style="text-align: center; font-style: italic; font-weight: bold; font-family: 'Times New Roman', Times, serif; line-height: 1.6; margin-bottom: 20px;">
        <p>Le coaching spirituel, constitue un accompagnement destiné à vous aider à explorer et à développer votre dimension spirituelle. Cela peut englober la quête de sens dans la vie, la connexion avec soi-même, l’alignement avec ses valeurs et croyances, ainsi que l’épanouissement personnel. Voici quelques aspects fondamentaux du coaching spirituel</p>

        <p>- <span style="color: #ffff00;">Prise de conscience :</span> Cette approche encourage l’introspection afin de mieux comprendre ses émotions, ses pensées et ses comportements, ce qui permet de mieux identifier ses besoins fondamentaux.</p>

        <p>- <span style="color: #ffff00;">Définition d’objectifs :</span> En collaboration, nous établirons des objectifs spirituels précis, qu’il s’agisse de découvrir un sens à sa vie, de cultiver une pratique de méditation ou d’améliorer vos relations interpersonnelles.</p>

        <p>- <span style="color: #ffff00;">Affinement de l’intuition :</span> Le coaching spirituel vise à développer l’intuition personnelle, facilitant ainsi l’écoute de ses ressentis et la prise de décisions en accord avec son moi intérieur.</p>

        <p>- <span style="color: #ffff00;">Soutien durant les transitions :</span> Que ce soit face à un changement de carrière, une perte ou une quête de sens, le coaching spirituel offre un soutien précieux pour naviguer à travers ces périodes de transition.</p>

        <p>- <span style="color: #ffff00;">Création d’un espace de confiance :</span> Nous établirons un cadre sûr et accueillant où vous pouvez vous exprimer librement, sans crainte de jugement.</p>

        <p>N’hésitez pas à me contacter pour planifier votre séance et commencer cette belle aventure vers le futur et l’épanouissement personnel.</p>

        <p style="color: #ffff00;">Pour le paiement de cette consultation, rapprochez-vous de la rubrique "Dons"</p>

        <p>Stéphane</p>
    </div>

    <div style="font-family: 'Times New Roman', Times, serif; font-style: italic; font-weight: bold;">
        <form method="POST" action="" enctype="multipart/form-data">
            <table style="width: 100%; border-collapse: separate; border-spacing: 0 15px;">
                <tr>
                    <td style="text-align: right; padding-right: 20px; width: 40%;"><label for="coaching-prenom">Votre prénom</label></td>
                    <td><input type="text" id="coaching-prenom" name="prenom" style="width: 80%; padding: 5px;"></td>
                </tr>
                <tr>
                    <td style="text-align: right; padding-right: 20px;"><label for="coaching-mail">Votre adresse mail</label></td>
                    <td><input type="email" id="coaching-mail" name="mail" style="width: 80%; padding: 5px;" required></td>
                </tr>
                <tr>
                    <td style="text-align: right; padding-right: 20px;"><label for="coaching-naissance">Votre date de naissance</label></td>
                    <td>
                        <input type="date" id="coaching-naissance" name="date_naissance" style="padding: 5px;">
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right; padding-right: 20px;"><label for="coaching-date-rdv">Date du rendez-vous</label></td>
                    <td>
                        <input type="date" id="coaching-date-rdv" name="date_rdv" style="padding: 5px;">
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right; padding-right: 20px;"><label for="coaching-heure-rdv">Heure du rendez-vous</label></td>
                    <td>
                        <input type="time" id="coaching-heure-rdv" name="heure_rdv" style="padding: 5px;">
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right; padding-right: 20px;"><label for="coaching-photo">Votre photo (recommandée)</label></td>
                    <td>
                        <input type="file" id="coaching-photo" name="photo" accept="image/*" style="padding: 5px;">
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right; padding-right: 20px;"><label for="coaching-question">Votre question concerne</label></td>
                    <td>
                        <select id="coaching-question" name="domaine" style="padding: 5px;">
                            <option value="Amour">Amour</option>
                            <option value="Travail">Travail</option>
                            <option value="Argent">Argent</option>
                            <option value="Sante">Santé</option>
                            <option value="Autre">Autre</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right; padding-right: 20px; vertical-align: top;"><label for="coaching-probleme">Exposez moi votre problème précis</label></td>
                    <td>
                        <textarea id="coaching-probleme" name="probleme" style="width: 80%; height: 150px; padding: 5px;"></textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" style="padding: 10px 20px; cursor: pointer; font-family: 'Times New Roman', Times, serif; font-style: italic; font-weight: bold;">Envoyer le<br>formulaire</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

        </div>

        <!-- À domicile Content -->
        <div id="content-domicile" class="spa-content-section">
<div class="OESZ OESZ_DivContent OESZG_WE8bfb2a0fb0">
    <div style="text-align: center; margin-bottom: 20px;">
        <h2 style="color: #ffff00; font-style: italic; font-family: 'Times New Roman', Times, serif;">Consultation à votre domicile</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icone_domicile.png" alt="Consultation à votre domicile" style="max-width: 200px; margin-top: 10px;">
    </div>

    <div style="text-align: center; font-style: italic; font-weight: bold; font-family: 'Times New Roman', Times, serif; line-height: 1.6; margin-bottom: 20px;">
        <p>Je vous propose un service unique : des séances à domicile, vous permettant de bénéficier d’une expérience intime et personnalisée dans le confort de votre logement.</p>

        <p>La voyance et la cartomancie sont des pratiques ancestrales qui nous connectent à notre intuition et à l’énergie qui nous entoure. Grâce à des lectures de cartes, tels que les oracles, je peux vous aider à éclaircir vos préoccupations, qu’elles soient liées à l’amour, au travail, à la famille ou à d’autres aspects de votre vie.</p>

        <p>Le coaching spirituel, quand à lui, est beaucoup plus récent et permet, entre autre chose, de se reconnecter à son moi intérieur, d'affiner son intuition, permet le soutien durant les transitions de la vie...</p>

        <p>En choisissant une consultation à domicile, vous vous offrez un moment privilégié, où confort et confidentialité sont au rendez-vous. Ensemble, nous découvrirons ce que l’univers a à vous révéler et comment vous pouvez utiliser ces connaissances pour avancer sur votre chemin de vie.</p>

        <p>Je vous propose de me déplacer à votre domicile dans un rayon de 15 kms aux alentours de St Florent sur Cher (à 20 kms de la ville de Bourges dans le département du Cher 18000) de 9h à 19h.</p>

        <p>N’hésitez pas à me contacter pour planifier votre séance et commencer cette belle aventure vers le futur et l’épanouissement personnel.</p>

        <p style="color: #ffff00;">Pour le paiement de cette consultation, rapprochez-vous de la rubrique "Dons"</p>

        <p>Stéphane</p>
    </div>

    <div style="font-family: 'Times New Roman', Times, serif; font-style: italic; font-weight: bold;">
        <form method="POST" action="" enctype="multipart/form-data">
            <table style="width: 100%; border-collapse: separate; border-spacing: 0 15px;">
                <tr>
                    <td style="text-align: right; padding-right: 20px; width: 40%;"><label for="domicile-prenom">Votre prénom</label></td>
                    <td><input type="text" id="domicile-prenom" name="prenom" style="width: 80%; padding: 5px;"></td>
                </tr>
                <tr>
                    <td style="text-align: right; padding-right: 20px;"><label for="domicile-mail">Votre adresse mail</label></td>
                    <td><input type="email" id="domicile-mail" name="mail" style="width: 80%; padding: 5px;" required></td>
                </tr>
                <tr>
                    <td style="text-align: right; padding-right: 20px;"><label for="domicile-naissance">Votre date de naissance</label></td>
                    <td>
                        <input type="date" id="domicile-naissance" name="date_naissance" style="padding: 5px;">
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right; padding-right: 20px;"><label for="domicile-date-rdv">Date du rendez-vous</label></td>
                    <td>
                        <input type="date" id="domicile-date-rdv" name="date_rdv" style="padding: 5px;">
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right; padding-right: 20px;"><label for="domicile-heure-rdv">Heure du rendez-vous</label></td>
                    <td>
                        <input type="time" id="domicile-heure-rdv" name="heure_rdv" style="padding: 5px;">
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right; padding-right: 20px;"><label for="domicile-photo">Votre photo (recommandée)</label></td>
                    <td>
                        <input type="file" id="domicile-photo" name="photo" accept="image/*" style="padding: 5px;">
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right; padding-right: 20px;"><label for="domicile-question">Votre question concerne</label></td>
                    <td>
                        <select id="domicile-question" name="domaine" style="padding: 5px;">
                            <option value="Amour">Amour</option>
                            <option value="Travail">Travail</option>
                            <option value="Argent">Argent</option>
                            <option value="Sante">Santé</option>
                            <option value="Autre">Autre</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right; padding-right: 20px; vertical-align: top;"><label for="domicile-probleme">Exposez moi votre problème précis</label></td>
                    <td>
                        <textarea id="domicile-probleme" name="probleme" style="width: 80%; height: 150px; padding: 5px;"></textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" style="padding: 10px 20px; cursor: pointer; font-family: 'Times New Roman', Times, serif; font-style: italic; font-weight: bold;">Envoyer le<br>formulaire</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

        </div>

        <!-- Vos Dons Content -->
        <div id="content-dons" class="spa-content-section">
<div class="OESZ OESZ_DivContent OESZG_WE8bfb2a0fb0">
    <div style="text-align: center; margin-bottom: 20px;">
        <h2 style="color: #ffff00; font-style: italic; font-family: 'Times New Roman', Times, serif;">Dons pour mes consultations</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tirelire.png" alt="Tirelire" style="max-width: 200px; margin-top: 10px;">
    </div>

    <div style="text-align: center; font-style: italic; font-weight: bold; font-family: 'Times New Roman', Times, serif; line-height: 1.6; margin-bottom: 20px;">
        <p>La contribution financière dans le domaine de la cartomancie de la magie blanche ou du coaching spirituel va au-delà d’une simple transaction commerciale ; elle représente un échange énergétique qui illustre la valeur du service rendu et l’intention qui l’accompagne. Ce processus favorise l’établissement d’une relation de confiance et de respect mutuel entre praticien et consultants, ce qui est fondamental pour le succès des pratiques ésotériques.</p>

        <p>Consultation <span style="color: #ffff00;">gratuite</span> : Offre réservée aux nouveaux consultants valable une seule fois.</p>

        <p>La consultation par <span style="color: #ffff00;">email</span> est une méthode de prestation de services ou de conseils à distance, permettant d'obtenir des réponses, des recommandations pour sa flexibilité, sa rapidité et son accessibilité. Les dons sont d'environ 9.5 € par question.</p>

        <p>Consultation <span style="color: #ffff00;">détaillée</span> : pour une séance d'une demi heure à une heure environ par tchat, vous bénéficierez d'une analyse détaillée de votre situation et de réponses plus précises à vos interrogations. Les dons sont d'environ 23 € pour une demi heure et 50 € environ pour une heure par tchat .</p>

        <p>La <span style="color: #ffff00;">magie blanche</span> s’appuie sur des forces positives et l’amour. Elle utilise des rituels, des symboles et des incantations pour canaliser des énergies bénéfiques, dans le but de vous aider et de favoriser des changements positifs dans votre vie. Pour les séances par tchat, les dons sont de 25 € à 170 € variables en fonction de votre problématique et du quartz ou la pierre semi-précieuse qui vous correspond le mieux.</p>

        <p>Le <span style="color: #ffff00;">coaching spirituel</span>, constitue un accompagnement destiné à vous aider à explorer et à développer votre dimension spirituelle. Cela peut englober la quête de sens dans la vie, la connexion avec soi-même, l’alignement avec ses valeurs et croyances, ainsi que l’épanouissement personnel. Les dons sont récurents et sont d'environ 73.5 € la séance. Il faut compter plusieurs séances pour arriver à vos fins.</p>

        <p>Je vous propose de me déplacer à <span style="color: #ffff00;">votre domicile</span> dans un rayon de 15 kms aux alentours de St Florent sur Cher pour une consultation de voyance (à 20 kms de Bourges dans le département du Cher 18000). Les dons sont en moyenne de 65 €.</p>

        <p>N'hésitez pas à franchir le pas et à réserver dès maintenant votre rendez-vous !</p>

        <p>Je vous remercie de me permettre de vous accompagner dans vos interrogations, vos décisions et dans toutes vos démarches à venir.</p>

        <p>Merci encore pour votre confiance.</p>

        <p>Stéphane.</p>
    </div>

    <div style="text-align: center; margin-top: 30px;">
        <a href="https://www.paypal.com/donate?token=CPoHOj-rwjZoW_lu8xOuM57_-4cK61YS8we2gRjAqFNPmKJiQ4sQFE4DgiSEIMG-gR0HiHDk83H1FKiq" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bouton_don.png" alt="Faire un don" style="max-width: 300px;">
        </a>
    </div>
</div>

        </div>

        <!-- 32 cartes Content -->
        <div id="content-cartes32" class="spa-content-section">
            <h2 class="section-title">Les lames d'un jeu de 32 cartes</h2>
            <div class="content-wrapper">
                <div style="text-align: center; margin-bottom: 20px;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/32cartes_top.png" alt="Cartes 32" style="max-width: 250px; border-radius: 10px; margin-bottom: 20px;" />
                </div>

                <p><em>L'interprétation des cartes repose sur leur emplacement, la question formulée et mon intuition. Chaque carte peut revêtir une signification tantôt positive, tantôt négative, influencée par les cartes qui l'accompagnent. Par exemple, les cœurs symbolisent souvent l'amour, alors que les piques sont généralement liés aux défis et aux conflits.</em></p>

                <p><em>La cartomancie avec un jeu de 32 cartes est une pratique captivante qui combine intuition, symbolisme et analyse. Qu'il s'agisse d'explorer des facettes de votre existence ou de rechercher des conseils, elle constitue une approche unique pour se relier à soi-même et à son futur. N'oubliez pas que la cartomancie est avant tout un moyen d'introspection, et que les réponses que vous recevez dépendent largement de votre propre perception et de votre état d'esprit.</em></p>

                <p><em>On trouve des traces de la cartomancie dès le XVe siècle en Espagne et dès le XVIe siècle en Italie. Au siècle des Lumières, la cartomancie a atteint un apogée en France et est révélée à un très large public avec Etteilla sous le nom de "cartonomancie" pour le jeu de 32 cartes. La pratique de cartomancie française repose majoritairement sur le jeu des quatre couleurs : piques, cœurs, trèfles et carreaux.</em></p>

                <p style="text-align: center; font-weight: bold;"><em>De nos jours, le jeu de 32 cartes est le plus utilisé en cartomancie.</em></p>

                <p><em>Si vous vous tirez les cartes, prenez en compte les cartes à la gauche et à la droite des lames et définissez le sens particulier de celles-ci En effet, si une ou plusieurs cartes négatives entourent la carte tirée cela signifie qu'un évènement positif ne verra pas le jour ou qu'il sera atténué voire repoussé Dans le cas contraire et si cette carte est entourée par une ou deux cartes bénéfiques alors vous pourrez voir naître un changement concret et positif.</em></p>

                <p style="text-align: center; margin-bottom: 40px;"><em>Pour obtenir de plus amples informations sur la signification des lames du jeu de 32 cartes il vous suffit de cliquer sur la carte de votre choix</em></p>

                <div class="cartes-container" style="text-align: center;">
                    <!-- Les Piques -->
                    <h3 style="color: #ffff00; text-decoration: underline; margin: 30px 0;">Les Piques</h3>
                    <div class="cartes-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; justify-items: center; margin-bottom: 40px;">
                        <div class="carte-container" data-card-id="pique-7"><div class="carte-tooltip">Le sept de Pique</div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Pique/2 - 7 de pique.png" alt="7 de pique" class="carte-img" />
                    </div>
                        <div class="carte-container" data-card-id="pique-8"><div class="carte-tooltip">Le huit de Pique</div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Pique/02 - 8 de pique.jpg" alt="8 de pique" class="carte-img" />
                    </div>
                        <div class="carte-container" data-card-id="pique-9"><div class="carte-tooltip">Le neuf de Pique</div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Pique/4 - 9 de pique.png" alt="9 de pique" class="carte-img" />
                    </div>
                        <div class="carte-container" data-card-id="pique-10"><div class="carte-tooltip">Le dix de Pique</div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Pique/5 - 10 de pique.png" alt="10 de pique" class="carte-img" />
                    </div>
                        <div class="carte-container" data-card-id="pique-valet"><div class="carte-tooltip">Le Valet de Pique</div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Pique/6 - Valet de pique.png" alt="Valet de pique" class="carte-img" />
                    </div>
                        <div class="carte-container" data-card-id="pique-dame"><div class="carte-tooltip">La Dame de Pique</div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Pique/7 - Dame de pique.png" alt="Dame de pique" class="carte-img" />
                    </div>
                        <div class="carte-container" data-card-id="pique-roi"><div class="carte-tooltip">Le Roi de Pique</div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Pique/8 - Roi de pique.png" alt="Roi de pique" class="carte-img" />
                    </div>
                        <div class="carte-container" data-card-id="pique-as"><div class="carte-tooltip">L\'As de Pique</div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Pique/1 - As de pique.png" alt="As de pique" class="carte-img" />
                    </div>
                    </div>

                    <!-- Les Coeurs -->
                    <h3 style="color: #ffff00; text-decoration: underline; margin: 30px 0;">Les Coeurs</h3>
                    <div class="cartes-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; justify-items: center; margin-bottom: 40px;">
                        <div class="carte-container" data-card-id="coeur-7">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Coeur/18 - 7 de coeur.png" alt="7 de coeur" class="carte-img">
                                        <div class="carte-tooltip">Sept de Coeur</div>
                                    </div>
                        <div class="carte-container" data-card-id="coeur-8">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Coeur/19 - 8 de coeur.png" alt="8 de coeur" class="carte-img">
                                        <div class="carte-tooltip">Huit de Coeur</div>
                                    </div>
                        <div class="carte-container" data-card-id="coeur-9">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Coeur/20 - 9 de coeur.png" alt="9 de coeur" class="carte-img">
                                        <div class="carte-tooltip">Neuf de Coeur</div>
                                    </div>
                        <div class="carte-container" data-card-id="coeur-10">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Coeur/21 - 10 de coeur.png" alt="10 de coeur" class="carte-img">
                                        <div class="carte-tooltip">Dix de Coeur</div>
                                    </div>
                        <div class="carte-container" data-card-id="coeur-valet">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Coeur/22 - Valet de coeur.png" alt="Valet de coeur" class="carte-img">
                                        <div class="carte-tooltip">Valet de Coeur</div>
                                    </div>
                        <div class="carte-container" data-card-id="coeur-dame">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Coeur/23 - Dame de coeur.png" alt="Dame de coeur" class="carte-img">
                                        <div class="carte-tooltip">Dame de Coeur</div>
                                    </div>
                        <div class="carte-container" data-card-id="coeur-roi">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Coeur/24 - Roi de coeur.png" alt="Roi de coeur" class="carte-img">
                                        <div class="carte-tooltip">Roi de Coeur</div>
                                    </div>
                        <div class="carte-container" data-card-id="coeur-as">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Coeur/17 - As de coeur.png" alt="As de coeur" class="carte-img">
                                        <div class="carte-tooltip">As de Coeur</div>
                                    </div>
                    </div>

                    <!-- Les Trèfles -->
                    <h3 style="color: #ffff00; text-decoration: underline; margin: 30px 0;">Les Trèfles</h3>
                    <div class="cartes-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; justify-items: center; margin-bottom: 40px;">
                        <div class="carte-container" data-card-id="trefle-7">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Trefle/26 - 7 de trefle.png" alt="7 de trefle" class="carte-img" />
                            <div class="carte-tooltip">Sept de Trèfle</div>
                        </div>
                        <div class="carte-container" data-card-id="trefle-8">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Trefle/27 - 8 de trefle.png" alt="8 de trefle" class="carte-img" />
                            <div class="carte-tooltip">Huit de Trèfle</div>
                        </div>
                        <div class="carte-container" data-card-id="trefle-9">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Trefle/28 - 9 de trefle.png" alt="9 de trefle" class="carte-img" />
                            <div class="carte-tooltip">Neuf de Trèfle</div>
                        </div>
                        <div class="carte-container" data-card-id="trefle-10">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Trefle/29 - 10 de trefle.png" alt="10 de trefle" class="carte-img" />
                            <div class="carte-tooltip">Dix de Trèfle</div>
                        </div>
                        <div class="carte-container" data-card-id="trefle-valet">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Trefle/30 - Valet de trefle.png" alt="Valet de trefle" class="carte-img" />
                            <div class="carte-tooltip">Valet de Trèfle</div>
                        </div>
                        <div class="carte-container" data-card-id="trefle-dame">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Trefle/31 - Dame de trefle.png" alt="Dame de trefle" class="carte-img" />
                            <div class="carte-tooltip">Dame de Trèfle</div>
                        </div>
                        <div class="carte-container" data-card-id="trefle-roi">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Trefle/32 - Roi de trefle.png" alt="Roi de trefle" class="carte-img" />
                            <div class="carte-tooltip">Roi de Trèfle</div>
                        </div>
                        <div class="carte-container" data-card-id="trefle-as">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Trefle/25 - As de trefle.png" alt="As de trefle" class="carte-img" />
                            <div class="carte-tooltip">As de Trèfle</div>
                        </div>
                    </div>

                    <!-- Les Carreaux -->
                    <h3 style="color: #ffff00; text-decoration: underline; margin: 30px 0;">Les Carreaux</h3>
                    <div class="cartes-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; justify-items: center; margin-bottom: 40px;">
                        <div class="carte-container" data-card-id="carreau-7">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Carreau/10 - 7 de carreau.png" alt="7 de carreau" class="carte-img" />
                            <div class="carte-tooltip">Sept de Carreau</div>
                        </div>
                        <div class="carte-container" data-card-id="carreau-8">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Carreau/11 - 8 de carreau.png" alt="8 de carreau" class="carte-img" />
                            <div class="carte-tooltip">Huit de Carreau</div>
                        </div>
                        <div class="carte-container" data-card-id="carreau-9">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Carreau/12 - 9 de carreau.png" alt="9 de carreau" class="carte-img" />
                            <div class="carte-tooltip">Neuf de Carreau</div>
                        </div>
                        <div class="carte-container" data-card-id="carreau-10">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Carreau/13 - 10 de carreau.png" alt="10 de carreau" class="carte-img" />
                            <div class="carte-tooltip">Dix de Carreau</div>
                        </div>
                        <div class="carte-container" data-card-id="carreau-valet">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Carreau/14 - Valet de carreau.png" alt="Valet de carreau" class="carte-img" />
                            <div class="carte-tooltip">Valet de Carreau</div>
                        </div>
                        <div class="carte-container" data-card-id="carreau-dame">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Carreau/15 - Dame de carreau.png" alt="Dame de carreau" class="carte-img" />
                            <div class="carte-tooltip">Dame de Carreau</div>
                        </div>
                        <div class="carte-container" data-card-id="carreau-roi">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Carreau/16 - Roi de carreau.png" alt="Roi de carreau" class="carte-img" />
                            <div class="carte-tooltip">Roi de Carreau</div>
                        </div>
                        <div class="carte-container" data-card-id="carreau-as">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Carreau/9 - As de carreau.png" alt="As de carreau" class="carte-img" />
                            <div class="carte-tooltip">As de Carreau</div>
                        </div>
                    </div>
                </div>

                <!-- Modal pour les cartes -->
                <div id="carte-modal-overlay" class="carte-modal-overlay">
                    <div class="carte-modal-content">
                        <span class="carte-modal-close">&times;</span>
                        <h2 id="modal-carte-title" style="color: #ffff00; text-align: center; font-style: italic; margin-bottom: 20px;"></h2>
                        <div style="text-align: center; margin-bottom: 30px;">
                            <img id="modal-carte-img" src="" alt="Carte" style="max-width: 150px; border-radius: 8px;">
                        </div>
                        <div id="modal-carte-text" style="color: #000; font-family: 'Times New Roman', Times, serif; font-size: 18px;">
                            <!-- Le texte sera injecté ici -->
                        </div>
                    </div>
                </div>

                <script>
                    window.cartesData = {
                        "belline-0": {
                            title: "Carte Bleue",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/0-carte-bleue.jpg",
                            text: `<p><em>La lame bleue est sans nul doute la meilleure carte de l'oracle Belline. Elle ne porte pas de numéro et n'est sous l'influence d'aucune planète.</em></p><p><em>Elle symbolise la protection, l'appui, le changement et annihile toutes les mauvaises cartes l'entourant.</em></p><p><em>Quelques soit le domaine : amour argent travail santé et famille elle symbolise la pleine réussite Elle indique également qu'un nouveau ou renouveau va s'accomplir dans la vie du consultant sous le signe du bonheur et de la passion</em></p><p><em>Pour le cartomancien, il est inutile de poursuivre plus loin les investigations et contrer un jeu déjà excellent. En revanche si le jeu est mitigé voire négatif, un second tirage peut être nécessaire.</em></p>`
                        },
                        "belline-1": {
                            title: "La Destinée",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/1-la-destinee.jpg",
                            text: `<p><em>La "Lame de la Destinée" dans l'Oracle Belline est une carte très significative. C'est un jeu de tarot divinatoire qui a été développé par l'astrologue français Edmond BELLINE au 19ème siècle. Chaque carte de ce jeu a des significations symboliques et peut être interprétée de différentes manières selon le contexte de la question posée et la disposition des cartes.</em></p><p><em>La Lame de la Destinée représente généralement des thèmes de changement, de choix, et de prise de décisions importantes. Elle symbolise également le fait que les événements de la vie sont souvent influencés par des forces extérieures, mais aussi par nos propres actions et choix. La carte peut indiquer que le consultant est à un tournant de sa vie et qu'il est important de faire preuve de clairvoyance.</em></p><p><em>Elle peut également indiquer plusieurs choses et placée à côté de cartes plus sombres ou à l'inverse plus positives il sera nécessaire de la recouvrir pour obtenir des explications complémentaires et affiner la situation.</em></p>`
                        },
                        "belline-2": {
                            title: "L'Etoile de l'Homme",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/2-etoile-homme.jpg",
                            text: `<p><em>"L'étoile de l'homme" comporte 2 éléments : un homme surmonté par une étoile à 6 branches symbole de l'étoile de David et que j'utilise personnellement pour représenter le consultant cependant elle possède également d'autres significations telles que l'époux, ou encore l'amant mais également l'ami proche et sincère.</em></p><p><em>La carte de l'étoile est souvent associée à des notions d'espoir, de réussite, de guidance et de protection. Elle peut symboliser une lumière dans l'obscurité, une direction à suivre ou une révélation à venir. Lorsque cette carte apparaît dans un tirage, elle est généralement perçue comme un signe positif, indiquant que les choses se mettent en place de façon bénéfique.</em></p><p><em>Dans une interprétation plus large, cette carte peut également suggérer une connexion spirituelle ou un voyage intérieur vers la découverte de soi et l'épanouissement personnel.</em></p><p><em>Elle peut également indiquer plusieurs choses et placée à côté de cartes plus sombres ou à l'inverse plus positives il sera nécessaire de la recouvrir pour obtenir des explications complémentaires et affiner la situation.</em></p>`
                        },
                        "belline-3": {
                            title: "L'Etoile de la Femme",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/3-etoile-femme.jpg",
                            text: `<p><em>"L'étoile de la femme" comporte 2 éléments : une femme surmontée par une étoile à 6 branches symbole de l'étoile de David et que j'utilise personnellement pour représenter la consultante cependant elle possède également d'autres significations telles que l'épouse, ou encore l'amante mais également l'amie proche et sincère</em></p><p><em>Elle semble suggérer que, malgré les difficultés ou les défis, des conseils avisés seront toujours disponibles pour guider la personne. Cette lame peut symboliser des forces positives dans la vie, une influence protectrice, et la présence d'une personne sage ou d'un mentor qui offre des orientations et des avertissements utiles. Si tu souhaites approfondir ce sujet ou explorer davantage, n'hésite pas à préciser tes attentes !</em></p>`
                        },
                        "belline-4": {
                            title: "La Nativité",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/4-nativite.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-5": {
                            title: "Réussite",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/5-reussite.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-6": {
                            title: "Élévation",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/6-elevation.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-7": {
                            title: "Honneurs",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/7-honneurs.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-8": {
                            title: "Pensée Amitié",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/8-pensee.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-9": {
                            title: "Campagne Santé",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/9-campagne.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-10": {
                            title: "Présents",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/10-presents.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-11": {
                            title: "La trahison",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/11-trahison.jpg",
                            text: `<p>La lame de la "trahison" de l'oracle Belline comporte 1 élément : un chat noir aux griffes
(13) acérées, à la queue dressée agressivement et aux moustaches pointues. Placée sous le
signe de la Lune, elle signifie la fourberie, la traîtrise, la convoitise, les complexes.</p>
<p>C'est le signe que des personnes mal intentionnées chercheront à trahir et à blesser le
consultant par des médisances, des calomnies. La vigilance est de mise surtout dans ses
amitiés et ses relations amoureuses qu'elles chercheront à détruire.</p>
<p>Dans le domaine professionnel, il pourrait bien y avoir une surprise désagréable. Si le
consultant s'apprête à signer un contrat, accepter un proposition commerciale ou encore si le
consultant est un indépendant, ce sera le signe d'une période difficile. On lui recommandera
la prudence, la sagesse, la précaution.</p>
<p>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres
où à l'inverse plus positives il sera nécéssaire de la recouvrir pour obtenir des explications
complémentaires et affiner la situation.</p>`
                        },
                        "belline-12": {
                            title: "Le départ",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/12-depart.jpg",
                            text: `<p>La lame du "départ" de l'oracle Belline comporte 2 éléments : la montagne et les oiseaux
migrateurs. Placés sous le signe de la Lune, ces deux éléments symbolisent le voyage très
lointain.</p>
<p>Cette lame est propice au démarrage ou redémarrage d'une entreprise, d'une nouvelle
orientation à prendre, d'un déplacement vers d'autres contrées.</p>
<p>Dans l'oracle de Belline cette lame peut également signifier que le consultant se détache de
son passé pour voler vers d'autres aventures et il est prêt à prendre du recul sans que des
freins financiers Iui fassent obstacle.</p>
<p>Sous le symbole des oiseaux migrateurs, il peut également prendre des vacances à l'étranger,
se changer les idées en retour de sa réussite professionnelle.</p>
<p>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres
où à l'inverse plus positives il sera nécéssaire de la recouvrir pour obtenir des explications
complémentaires et affiner la situation.</p>`
                        },
                        "belline-13": {
                            title: "L'inconstance",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/13-inconstance.jpg",
                            text: `<p>La lame de "l'inconstance" de l'oracle Belline comporte 2 éléments : une tête sortant des
nuages et soufflant sur la tour au drapeau ainsi qu'une petite montagne dénuée de végétation,
infertile. Placée sous le signe de la Lune, elle signifie la stérilité et la tour le refuge.</p>
<p>L'oracle indique que le consultant doit s'abriter provisoirement et remettre ses projets à plus
tard. Si le consultant est chef d 'entreprise il faudra remettre un projet car il est incertain. Si il
est salarié, ce n'est pas le moment de demander une promotion, un avancement, une prime.</p>
<p>En amour, il y a fragilité des sentiments, le consultant doit attendre que la situation
s'éclaicisse avant de prendre une décision. Il y a risque d'infidélité.</p>
<p>Côté argent. les difficultés sont présentes, gêne, contrariété, obstacle
Côté famille, le soleil n'est pas au beau fixe et il y a un risque d'instabilité, de déloyauté.</p>
<p>Si à cet instant l'oracle symbolise l'incertitude, le vent peut changer et devenir propice car
rien n'est arrêté.</p>
<p>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres
où à l'inverse plus positives il sera nécéssaire de la recouvrir pour obtenir des explications
complémentaires et affiner la situation.</p>`
                        },
                        "belline-14": {
                            title: "La découverte",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/14-decouverte.jpg",
                            text: `<p>La lame de la "découverte" de l'oracle Belline comporte 4 éléments : une lunette
astronomique pointée sur une étoile à 6 branches, un parchemin sur lequel sont tracés une
autre étoile à 6 branches et un cercle marqué d'une croix, 2 livres et la chouette. Placée sous
le signe de la Lune, elle symbolise l'astronomie et par répercution l'astrologie, la lecture de
l'avenir à travers les étoiles, le cartomancien, le guide spirituel.</p>
<p>Dans l'oracle Belline, la lunette symbolise la connaissance basée sur l'observation, sur la
réflexion tandis que la chouette incarne la réflexion, l'intuition. Les livres quant à eux
représentent l'étude et la connaissance. La chouette veille sur la vigilance, l'intuition.</p>
<p>Le consultant peut trouver une solution à son problème à l'aide d'un guide spirituel. Il se
passionne pour les métiers intellectuels. L'intelligence et l'intuition seront ses atouts et lui
permettront de réussir, de progreser dans les affaires.</p>
<p>Côté coeur, il lui faudra suivre ses intuitions idem en ce qui concerne son emploi ou l'on lui
promet de saisir une blelle occasion.</p>
<p>Côté argent il est temps de faire des placements ou des investissements judicieux.</p>
<p>Le consultant est doué pour la pratique des sciences occultes. L'oracle est extrémement
favorable dans ce domaine auquel il correspond particulièrement.</p>
<p>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres
où à l'inverse plus positives il sera nécéssaire de la recouvrir pour obtenir des explications
complémentaires et affiner la situation.</p>`
                        },
                        "belline-15": {
                            title: "L'eau",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/15-eau.jpg",
                            text: `<p>La lame de "l'eau" de l'oracle Belline comporte 2 éléments : un bateau orné d 'un drapeau au
milieu de l'océan. Elle est placée signe de la Lune et symbolise le voyage par delà les mers,
vers l'étranger.</p>
<p>Sous le signe de la chance, les affaires marchent toutes seules. Si le consultant travaille dans
l'import export, il y aura voyages d'affaires.</p>
<p>Côte coeur il y a une belle rencontre en perspective qui pourrait déboucher sur une relation
amicale dans un premier temps.</p>
<p>Côté argent il y a protection, soutien, appui.</p>
<p>Cependant, si la mer est calme pour le moment, elle risque de se transformer en tempête, il
est donc recommandé de se prémunir des changements de cap, des mauvaises surprises. Le
consultant devra se fier à son intuition pour accéder au succès. En faisant preuve de sagesse,
il saura atteindre une stabilité financière qui le préservera sur le plan matériel.</p>
<p>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres
ou à l'inverse plus positives il sera nécéssaire de la recouvrir pour obtenir des explications
complémentaires et affiner la situation.</p>`
                        },
                        "belline-16": {
                            title: "Les pénates",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/16-penates.jpg",
                            text: `<p>La lame des "pénates" de l'oracle Belline comporte 3 éléments : une tour ronde crénelée, une
porte ainsi qu'une fenêtre. Placée sous Le signe de la Lune, elle signifie le refuge, un abri sûr.</p>
<p>La porte est difficilement accessible tout comme la tour en elle même. C'est signe de
protection, de défense, de rempart, de fortification. Le consultant peut vivre tranquille et à
l'abri des autres mais ne se renferme-til pas trop vers le monde qui l'entoure ?</p>
<p>En effet, la famille et les amis comptent beaucoup pour le consultant alors il doit prendre le
temps d'en profiter et passer d'agréables et bénéfiques moments en leurs compagnies de
même, le consultant peut se trouver à l'aube de construire un foyer avec l'être aimé.</p>
<p>Dans le domaine professionnel, il n'y aura pas une grande marge d'erreur, cela devrait le
pousser à ne pas se lancer trop promptement dans des projets, à bien réfléchir avant d'agir. Si
le consultant posséde des ressources financières, il sera bon d'investir dans l'immobilier.</p>
<p>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres
ou à l'inverse plus positives il sera nécéssaire de la recouvrir pour obtenir des explications
complémentaires et affiner la situation.</p>`
                        },
                        "belline-17": {
                            title: "La maladie",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/17-maladie.jpg",
                            text: `<p>La lame de la "maladie" de l'oracle Belline comporte 2 éléments : un oiseau bleu et une
grenouille entre ses griffes. Placée sous Le signe de la Lune, elle signifie l'angoisse, l'appréhension, la frayeur, les inquiétudes.</p>
<p>Obstacle, entrave dans les ambitions professionnelles, le consultant devra faire preuve
de réflexion dans son travail, de mauvais choix pouvant vous conduire à des pertes. Il en
sera de même de ses investissements il doit se montrer attentif aux placements qu'il fait car
la période n'est pas propice aux bénéfices.</p>
<p>Il ne doit pas négliger sa place au sein du foyer certainement trop pris par son travail.
Attention à ne pas passer à côté du plus important au risque de le payer très cher.</p>
<p>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres
ou à l'inverse plus positives il sera nécéssaire de la recouvrir pour obtenir des explications
complémentaires et affiner la situation.</p>`
                        },
                        "belline-18": {
                            title: "Changement",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/18-changement.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-19": {
                            title: "L'Argent",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/19-argent.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-20": {
                            title: "L'Intelligence",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/20-intelligence.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-21": {
                            title: "Vol Perte",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/21-vol.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-22": {
                            title: "Entreprises",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/22-entreprises.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-23": {
                            title: "Trafic",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/23-trafic.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-24": {
                            title: "Nouvelle",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/24-nouvelle.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-25": {
                            title: "Plaisirs",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/25-plaisirs.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-26": {
                            title: "La Paix",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/26-paix.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-27": {
                            title: "Union",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/27-union.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-28": {
                            title: "Famille",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/28-famille.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-29": {
                            title: "Amour",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/29-amour.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-30": {
                            title: "La Table",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/30-table.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-31": {
                            title: "Passions",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/31-passions.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-32": {
                            title: "Méchanceté",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/32-mechancete.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-33": {
                            title: "Procès",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/33-proces.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-34": {
                            title: "Despotisme",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/34-despotisme.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-35": {
                            title: "Ennemis",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/35-ennemis.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-36": {
                            title: "Pourparlers",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/36-pourparlers.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-37": {
                            title: "Le Feu",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/37-feu.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-38": {
                            title: "Accident",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/38-accident.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-39": {
                            title: "Appui",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/39-appui.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-40": {
                            title: "Beauté",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/40-beaute.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-41": {
                            title: "Héritage",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/41-heritage.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-42": {
                            title: "Sagesse",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/42-sagesse.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-43": {
                            title: "La Renommée",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/43-renommee.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-44": {
                            title: "Le Hasard",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/44-hazard.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-45": {
                            title: "Bonheur",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/45-bonheur.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-46": {
                            title: "Infortune",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/46-infortune.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-47": {
                            title: "Stérilité",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/47-sterilite.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-48": {
                            title: "Fatalité",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/48-fatalite.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-49": {
                            title: "La Grâce",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/49-grace.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-50": {
                            title: "Ruine",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/50-ruine.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-51": {
                            title: "Retard",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/51-retard.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "belline-52": {
                            title: "Cloître",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/52-cloitre.jpg",
                            text: `<p><em>Texte d'interprétation à venir pour cette carte...</em></p>`
                        },
                        "pique-7": {
                            title: "Sept de Pique",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Pique/2 - 7 de pique.png",
                            text: `<p><em>Le sept de pique symbolise un manque de perspective d'avenir.</em></p>
                                   <p><em>Le consultant reste figé sur son présent et ne cherche pas à aller de l 'avant par peur de la déception Il y aura une petite période de trouble où la tristesse sera au rendez-vous face à une situation précaire et difficile à surmonter.</em></p>
                                   <p><em>Face à cette situation bloquée cette carte indique qu'il va falloir fournir un effort pour se sortir de cette configuration où la solitude et l 'isolement se sont invités Il faut rompre avec cet attentisme et saisir les opportunités qui peuvent s'offrir à lui et aller de l'avant.</em></p>
                                   <p><em>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres ou à l'inverse plus positives il sera nécessaire de la recouvrir pour obtenir des explications complémentaires et affiner la situation.</em></p>`
                        },
                        "pique-8": {
                            title: "Huit de Pique",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Pique/02 - 8 de pique.jpg",
                            text: `<p><em>En cartomancie, le 8 de pique est souvent associé à des significations complexes et ambivalentes. Voici quelques interprétations courantes : Conflits et tensions : Le 8 de pique peut symboliser des luttes, des conflits ou des malentendus. Cela peut impliquer des disputes avec des amis, des partenaires ou dans un cadre professionnel.</em></p>
                                   <p><em>Difficultés émotionnelles : Cette lame peut également représenter des émotions négatives, telles que l'anxiété, la dépression ou la mélancolie. Il peut signifier une période de réflexion douloureuse ou de luttes internes.</em></p>
                                   <p><em>Parfois, le 8 de pique peut indiquer l'arrivée de nouveaux défis ou obstacles à surmonter. Cela peut également suggérer qu'il est temps de faire face à ces défis de manière proactive.</em></p>
                                   <p><em>Dans un sens plus positif, cette carte peut évoquer la nécessité de transformation et de changement. Elle incite à sortir de sa zone de confort pour évoluer.</em></p>
                                   <p><em>Elle peut également signifier qu'il est important d'exercer la prudence dans ses décisions, en particulier lorsqu'il s'agit de relations ou d'engagements personnels.</em></p>
                                   <p><em>En résumé, le 8 de pique peut avoir une connotation négative, mais il peut aussi encourager la réflexion et le changement. Comme toujours en cartomancie, le contexte et les autres cartes tirées influencent l'interprétation finale.</em></p>`
                        },
                        "pique-9": {
                            title: "Neuf de Pique",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Pique/4 - 9 de pique.png",
                            text: `<p><em>Le neuf de pique symbolise la mort, la fin d'un projet mené à son terme, le renouveau.</em></p>
                                   <p><em>Aux côtés de têtes c'est au sens propre qu'il faudra se tourner aux côtés d'autres cartes plus positives elle se fait également signe de fin.</em></p>
                                   <p><em>Il peut s'agir de l'achèvement d'un projet mené à son terme, de la fin de la solitude mais aux côtés de cartes plus négatives elle signifie la rupture sentimentale la fin d'un amour et pour un adolescent il peut s'agir du passage à l'âge adulte qui s'avère difficile</em></p>
                                   <p><em>Le neuf de pique indique également le renouveau. Dans les semaines à venir, vous allez devoir prendre du recul au vu de votre situation qui va changer.</em></p>
                                   <p><em>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres ou à l'inverse plus positives il sera nécessaire de la recouvrir pour obtenir des explications complémentaires et affiner la situation.</em></p>`
                        },
                        "pique-10": {
                            title: "Dix de Pique",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Pique/5 - 10 de pique.png",
                            text: `<p><em>Le dix de pique symbolise le mal être, la maladie la solitude ou bien encore l'isolement Cette carte peut être présage de dépression nerveuse, d'un raz le bol généralisé</em></p>
                                   <p><em>Il vous faudra vous battre pour que la situation évolue favorablement car cette carte n'est pas une fatalité et vous devriez voir le bout du tunnel rapidement à condition de vous en donner les moyens et d 'être bien entouré par vos amis votre famille...</em></p>
                                   <p><em>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres ou à l'inverse plus positives il sera nécessaire de la recouvrir pour obtenir des explications complémentaires et affiner la situation.</em></p>`
                        },
                        "pique-valet": {
                            title: "Valet de Pique",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Pique/6 - Valet de pique.png",
                            text: `<p><em>Le valet de pique symbolise le jeune homme brun.</em></p>
                                   <p><em>Il est fourbe et dénué de principes moraux Une rencontre avec ce jeune homme est souvent signe de désagrément de problèmes à venir. Le consultant devra faire preuve de vigilance tant sur le plan personnel que professionnel.</em></p>
                                   <p><em>Le valet de pique signifie également l'amant sans lendemain et sur le plan des affaires le jeune homme cupide et avide Le consultant devra impérativement se méfier de ce type de personne durant les prochaines semaines voir les prochains mois.</em></p>
                                   <p><em>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres ou à l'inverse plus positives il sera nécessaire de la recouvrir pour obtenir des explications complémentaires et affiner la situation.</em></p>`
                        },
                        "pique-dame": {
                            title: "Dame de Pique",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Pique/7 - Dame de pique.png",
                            text: `<p><em>La dame de pique symbolise la femme d 'âge mur.</em></p>
                                   <p><em>Elle cherche à nuire au consultant par ses médisances et sa jalousie maladive. Elle est prête à tout pour arriver à ses fins et faire du tort, blesser par tous les moyens possibles.</em></p>
                                   <p><em>Elle est envieuse du bonheur du consultant et peut également se montrer jalouse de sa position dans l 'entreprise ou de la place convoitée, de la promotion envisagée.</em></p>
                                   <p><em>Sur le plan famillial il peut s'agir d'une rivalité pour l'homme aimé qu'elle voudrait bien conquérir En tous cas la méfiance est de mise et l 'on lui recommande la plus grande prudence au quotidien car la dame de pique guette ses moindres faiblesses.</em></p>
                                   <p><em>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres ou à l'inverse plus positives il sera nécessaire de la recouvrir pour obtenir des explications complémentaires et affiner la situation.</em></p>`
                        },
                        "pique-roi": {
                            title: "Roi de Pique",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Pique/8 - Roi de pique.png",
                            text: `<p><em>Le roi de pique symbolise l'homme d 'âge mûr</em></p>
                                   <p><em>Il pourrait barrer la route au consultant à travers sa jalousie maladive.</em></p>
                                   <p><em>Le roi de pique peut prendre différentes formes : le collègue de travail envieux qui convoite sa promotion sa position ou encore un prétendant qui souhaiterait conquérir la compagne du consultant.</em></p>
                                   <p><em>Il peut également inviter à la prudence et à la réflexion avant d'agir, suggérant que l'on doit être vigilant face à des situations complexes ou à des personnes manipulatrices.</em></p>
                                   <p><em>Le Roi de Pique est parfois associé à des questions de justice et de vérité. Il peut représenter la nécessité de faire face à des vérités difficiles ou de rendre des comptes sur des actions passées.</em></p>
                                   <p><em>En tout cas la méfiance est de mise et on lui recommande la plus grande prudence au quotidien car le roi de pique guette ses moindres faiblesses.</em></p>
                                   <p><em>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres ou à l'inverse plus positives il sera nécessaire de la recouvrir pour obtenir des explications complémentaires et affiner la situation.</em></p>`
                        },

                        "coeur-7": {
                            title: "Sept de Coeur",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Coeur/18 - 7 de coeur.png",
                            text: `<p><em>Dans la cartomancie, le sept de cœur symbolise le manque de confiance en soi. Cette carte met en garde de l'importance de ne pas baisser les bras, de garder confiance en soi et de garder un œil vers l'avenir.</em></p>
                                   <p><em>Professionnellement, le sept de coeur signifie que les projets mûris de longue haleine auront toutes les chances de trouver sous peu une issue harmonieuse et épanouissante à une heure ou le consultant ne l'attendait plus.</em></p>
                                   <p><em>Sentimentalement, il évoque des sentiments positifs, des romances naissantes ou des relations affectueuses. Il peut symboliser une connexion émotionnelle forte ou des échanges affectifs enrichissants. Cette lame peut également évoquer des rêves liés à l'amour et aux aspirations romantiques. Elle peut inciter à poursuivre ses désirs affectifs et à ne pas avoir peur d’ouvrir son cœur.</em></p>
                                   <p><em>En résumé, le sept de cœur est généralement une carte positive en cartomancie, évoquant des thématiques liées à l'amour, aux émotions et aux relations.</em></p>
                                   <p><em>Elle peut également indiquer plusieurs choses et placée à côté de cartes plus sombres ou à l'inverse plus positives il sera nécessaire de la recouvrir pour obtenir des explications complémentaires et affiner la situation.</em></p>`
                        },
                        "coeur-8": {
                            title: "Huit de Coeur",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Coeur/19 - 8 de coeur.png",
                            text: `<p><em>Le huit de coeur symbolise la rencontre, l'amour.</em></p>
                                   <p><em>Unr rencontre prochaine pourrait avoir lieu et constituerait le point de départ d'un lien sentimental durable ou non</em></p>
                                   <p><em>Coup de foudre, passion, le huit de coeur se fait signe d'amour avec une personne ayant les cheveux clairs. Il peut également s'agir d 'un rapprochement spirituel mais quoi qu'il en soit la relation est sur de bonnes voies.</em></p>
                                   <p><em>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres ou à l'inverse plus positives il sera nécessaire de la recouvrir pour obtenir des explications complémentaires et affiner la situation.</em></p>`
                        },
                        "coeur-9": {
                            title: "Neuf de Coeur",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Coeur/20 - 9 de coeur.png",
                            text: `<p><em>Le neuf de coeur symbolise la réussite dans tous les domaines.</em></p>
                                   <p><em>Dans le domaine professionnel il y a promotion, évolution ou mutation pour un poste de plus grande importance que le consultant convoitait depuis longtemps. Il est maintenant temps de recueillir les fruits de l 'invetissement fourni.</em></p>
                                   <p><em>Sur le plan sentimental le consultant fera une rencontre de premier plan, des fiançailles ou un mariage pourrait également avoir lieu prochainement.</em></p>
                                   <p><em>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres ou à l'inverse plus positives il sera nécessaire de la recouvrir pour obtenir des explications complémentaires et affiner la situation.</em></p>`
                        },
                        "coeur-10": {
                            title: "10 de Coeur",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Coeur/21 - 10 de coeur.png",
                            text: `<p><em>Le dix de coeur symbolise l'équilibre la joie de vivre et la réussite.</em></p>
                                   <p><em>Face aux aléas de la vie vos projets en gestation et jusqu'à présent bloqués se trouvent désormais ouverts aux succès.</em></p>
                                   <p><em>Professionnelement, Ii y a promotion sous peu de temps.(Si vous êtes chef d 'entreprise cela indique de nouveaux contrats).</em></p>
                                   <p><em>Sur le plan sentimental le dix de coeur est trés bénéfique et se fait l 'annonce d 'une union vouée à la réussite et au bonheur sans la moindre ombre au tableau. Dans le contexte de la cartomancie, le 10 de cœur est souvent associé à des significations positives, en lien avec les émotions, les relations et la joie.</em></p>
                                   <p><em>Cette lame symbolise généralement des sentiments d'amour, d'amitié et d'harmonie dans les relations. Cela peut indiquer une période de bonheur partagé avec les proches. Elle indique la réalisation de désirs émotionnels, des moments de satisfaction personnelle, ou l'accomplissement d'objectifs liés à la vie affective.</em></p>
                                   <p><em>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres ou à l'inverse plus positives il sera nécessaire de la recouvrir pour obtenir des explications complémentaires et affiner la situation.</em></p>`
                        },
                        "coeur-valet": {
                            title: "Valet de Coeur",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Coeur/22 - Valet de coeur.png",
                            text: `<p><em>Le Valet de coeur symbolise le courtisan mais également l'ami de coeur.</em></p>
                                   <p><em>Si le consultant est un homme il souhaite engager une relation amoureuse avec une femme plus âgée que lui mais il n'est pas stable émotionnellement et fait preuve d 'immaturité ce qui pourrait bien le mener à une relation de courte durée trés éprouvante pour la femme qu'il convoite.</em></p>
                                   <p><em>Il peut également être le confident d'un ami qui fait face à des problèmes de coeur. Celui-ci à besoin d'être réconforté et le consultant lui apportera son aide inconditionnelle.</em></p>
                                   <p><em>Cette lame peut également symboliser de nouveaux départs sur le plan émotionnel. Cela peut être le début d'une nouvelle relation amoureuse ou le renouveau d'une amitié. Il est également associé à la créativité et à l'inspiration. Cela peut indiquer que des projets artistiques ou créatifs sont sur le point de se développer.</em></p>
                                   <p><em>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres ou à l'inverse plus positives il sera nécessaire de la recouvrir pour obtenir des explications complémentaires et affiner la situation.</em></p>`
                        },
                        "coeur-dame": {
                            title: "Dame de Coeur",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Coeur/23 - Dame de coeur.png",
                            text: `<p><em>La dame de coeur symbolise la confidente, l'amante, la mère.</em></p>
                                   <p><em>Si vous êtes une femme la dame de coeur représente la confidente, l'amie proche avec qui vous pourrez discuter et mettre des choses au point. Elle vous apportera réconfort et bienveillance.</em></p>
                                   <p><em>En revanche si vous êtes un homme, la dame de coeur désigne l 'amante, la femme avec qui vous pourrez construire une union durable.</em></p>
                                   <p><em>Elle peut également être représentative de la mère qui vous protège et avec qui vous avez de grande affinités.</em></p>
                                   <p><em>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres ou à l'inverse plus positives il sera nécessaire de la recouvrir pour obtenir des explications complémentaires et affiner la situation.</em></p>`
                        },
                        "coeur-roi": {
                            title: "Roi de Coeur",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Coeur/24 - Roi de coeur.png",
                            text: `<p><em>La roi de coeur symbolise l'homme d'âge mûr, la bienveillance et l'amour.</em></p>
                                   <p><em>Le roi de coeur symbolise l'ami ou le consultant toujours de bons conseils qui soutient le consultant tant moralement que pécunièrement.</em></p>
                                   <p><em>Il est pour une femme le courtisant idéal qui peut venir en aide et il peut également représenter la mari protecteur et aimant que toute femme recherche.</em></p>
                                   <p><em>Dans sa configuration négative il représente l'homme puissant qui cherche à nuire au consultant et réduire ses projets à néant. Il peut également se montrer l'homme qui est un rival sur le plan sentimental.</em></p>
                                   <p><em>Il est souvent associé à des qualités telles que la sagesse et la maturité affective, indiquant une maîtrise de soi et une capacité à gérer des situations délicates.</em></p>
                                   <p><em>Cette lame peut également faire référence à des liens familiaux forts ou à des amitiés sincères et durables.</em></p>
                                   <p><em>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres ou à l'inverse plus positives il sera nécessaire de la recouvrir pour obtenir des explications complémentaires et affiner la situation.</em></p>`
                        },
                        "coeur-as": {
                            title: "As de Coeur",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Coeur/17 - As de coeur.png",
                            text: `<p><em>L'as de coeur symbolise la joie l'amour au foyer.</em></p>
                                   <p><em>Il est de trés bonne augure on pourrait même dire que c'est la meilleure carte du jeu Il signifie la joie au foyer et l 'amour naissant ou accompli capable de l 'emporter sur les moindres contrariétées.</em></p>
                                   <p><em>L'as de coeur se fais signe de promotion, de prime : l'argent rentre !</em></p>
                                   <p><em>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres ou à l'inverse plus positives il sera nécessaire de la recouvrir pour obtenir des explications complémentaires et affiner la situation.</em></p>`
                        },
                        "pique-as": {
                            title: "As de Pique",
                            image: "<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Pique/1 - As de pique.png",
                            text: `<p><em>L'as de pique est sans nul doute la carte la plus négative du jeu</em></p>
                                   <p><em>Elle symbolise entre autre la maladie, la rupture sentimentale et la mort au sens propre comme au figuré.</em></p>
                                   <p><em>Sur le plan professionnel elle indique le licenciement pour l'employé, la rupture de contrats et le dépôt de bilan pour le chef d'entreprise.</em></p>
                                   <p><em>Sentimentalement, l'as de pique symbolise la rupture, la fin d'une histoire d'amour.</em></p>
                                   <p><em>L'as de pique se fait également de mauvaise augure en particulier pour tout ce qui concerne les finances mais il est avant tout un avertissement. C'est pourquoi rien n'est définitif et le consultant reste maître de son destin car il a la capacité d'anticiper les évènements et d'agir sur son futur notamment grace à la cartomancie, la voyance.</em></p>
                                   <p><em>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres ou à l'inverse plus positives il sera nécessaire de la recouvrir pour obtenir des explications complémentaires et affiner la situation.</em></p>`
                        },

    "trefle-7": {
        title: "Sept de Trèfle",
        image: "<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Trefle/26 - 7 de trefle.png",
        text: `Le 7 de trèfle peut indiquer que de nouvelles opportunités se présentent à vous ou que vous ferez preuve de chance dans une situation donnée.<br><br>Cette lame peut également suggérer la nécessité d'agir avec prudence. Il peut être un signal pour ne pas prendre de risques inutiles et d'examiner attentivement les situations avant de prendre des décisions. Il peut encourager une plus grande confiance en soi et pousser à faire confiance à ses instincts.<br><br>Il peut également symboliser le début de nouveaux projets ou entreprises qui pourraient apporter chance et succès.<br><br>Sur le plan sentimental le consultant est face à un dilemne dont il peine à trouver une solution rationnelle qui pourrai avoir des répercutions dramatiques sur sa vie<br><br>Il est possible qu'il soit amené à vouloir tromper sa partenaire et inversement Le consultant doit trouver rapidement une solution à ce conflit intérieur et ne pas rester dans l'expectative au risque de s'en mordre les doigts plus tard.<br><br>Il va falloir qu'il se montre réaliste et objectif. Une aide pourra lui être donnée par son entourage proche, ses amis, sa famille ou un consultant extérieur.<br><br>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres ou à l'inverse plus positives il sera nécéssaire de la recouvrir pour obtenir des explications complémentaires et affiner la situation.`
    },
    "trefle-8": {
        title: "Huit de Trèfle",
        image: "<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Trefle/27 - 8 de trefle.png",
        text: `Le huit de trèfle symbolise l'avenir professionnel.<br><br>Sous peu de temps Le consultant apprendra une bonne nouvelle en vue, une promotion est en vue suite a un travail soutenu et prolifique. Il fait référence à l'importance du travail acharné et des efforts pour atteindre ses objectifs. Il incite à persévérer et à ne pas abandonner face aux obstacles. S'en suivra une période de réussite et d'accomplissement dans ses projets, surtout s'ils sont liés au travail ou aux finances.<br><br>Souvent liée à des opportunités sur le plan financier, des gains matériels ou des projets à venir qui pourraient s'avérer bénéfiques, elle peut aussi symboliser l'importance de la communication dans les affaires et les relations. Elle encourage à être clair et direct dans vos échanges.<br><br>Cependant près de lui une personne agit dans l'ombre et cherche à contrarier ses projets, ses objectifs. Si le consultant a des soupçons vis à vis d'une personne de son entourage professionnel, il lui est recommandé de prendre de la distance avec elle rapidement : Il peut y avoir conflit d'intérêts. Il peut évoquer un dynamisme, des changements rapides ou des décisions à prendre. Cela peut indiquer un moment d'accélération dans votre vie personnelle ou professionnelle.<br><br>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres ou à l'inverse plus positives il sera nécéssaire de la recouvrir pour obtenir des explications complémentaires et affiner la situation.`
    },
    "trefle-9": {
        title: "Neuf de Trèfle",
        image: "<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Trefle/28 - 9 de trefle.png",
        text: `Le 9 de trèfle est souvent associé à des périodes de chance et de bonnes opportunités qui se présentent à vous. Cela peut indiquer que vous êtes sur le point de recevoir de bonnes nouvelles ou de voir une amélioration de votre situation.<br><br>Ce chiffre pourrait aussi symboliser une stabilité financière imminente, un gain inattendu ou la réalisation de projets financiers. Il peut aussi signifier que les efforts que vous avez fournis commencent à porter leurs fruits, et que vous pouvez récolter les bénéfices de votre travail.<br><br>Sur un plan plus personnel, le 9 de trèfle peut représenter une période d'équilibre émotionnel et de satisfaction dans la vie quotidienne.<br><br>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres ou à l'inverse plus positives il sera nécéssaire de la recouvrir pour obtenir des explications complémentaires et affiner la situation.`
    },
    "trefle-10": {
        title: "Dix de Trèfle",
        image: "<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Trefle/29 - 10 de trefle.png",
        text: `Le dix de trèfle symbolise le changement de situation, l'évolution positive, elle indique l'équilibre et le bien-être au sein de votre maison.<br><br>L'harmonie règne au sein de votre couple et elle se fait écho d'une volonté de s'unir par le mariage, elle annonce les fiançailles et si vous êtes célibataire le dix de trèfle se fait présage d'une rencontre prochaine avec l'être qui saura faire battre votre coeur.<br><br>Le 10 de Trèfle est souvent perçu comme un symbole de réussite matérielle, de prospérité et d'abondance. Il peut également représenter des gains financiers ou des réalisations professionnelles. La carte évoque souvent la conclusion de projets ou d'efforts, et le sentiment de satisfaction qui en résulte.<br><br>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres ou à l'inverse plus positives il sera nécéssaire de la recouvrir pour obtenir des explications complémentaires et affiner la situation.`
    },
    "trefle-valet": {
        title: "Valet de Trèfle",
        image: "<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Trefle/30 - Valet de trefle.png",
        text: `Le valet de trèfle symbolise le jeune homme aux cheveux bruns.<br>Selon que vous soyez une femme ou un homme son interprétation diffère :<br><br>Pour une femme il sera le jeune homme séduisant cherchant à vous charmer et avec qui il faudra jouer de prudence et ne pas aller trop vite dans la relation amoureuse qui est en train de naître au risque d'être déçue voire anéantie.<br><br>En effet le valet de trèfle pourrait avoir un caractère destructeur. Il y a danger et la consultante risque d'y laisser des plumes.<br><br>Pour un homme ce sera le rival. Plus jeune et plus séduisant qui pourrait convoiter la conjointe du consultant, il va falloir mettre les choses à plat avec lui et le rendre inoffensif.<br><br>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres ou à l'inverse plus positives il sera nécéssaire de la recouvrir pour obtenir des explications complémentaires et affiner la situation.`
    },
    "trefle-dame": {
        title: "Dame de Trèfle",
        image: "<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Trefle/31 - Dame de trefle.png",
        text: `La dame de trèfle symbolise la femme brune.<br><br>Il faudra que le consultant se méfie de celle-ci car elle est de mauvaise augure plus particulièrement en ce qui concerne les sentiments : la jalousie, la convoitise, elle ne reculera devant rien pour nuire, faire du tort au consultant et lui porter atteinte par pur égoïsme et méchanceté gratuite.<br><br>Elle est aussi souvent associée à des significations spécifiques: Elle peut représenter une femme influente, souvent à caractère pratique, ambitieuse et qui peut être liée aux affaires ou aux finances. Elle aborde les situations de manière pragmatique et analytique.<br><br>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres ou à l'inverse plus positives il sera nécéssaire de la recouvrir pour obtenir des explications complémentaires et affiner la situation.`
    },
    "trefle-roi": {
        title: "Roi de Trèfle",
        image: "<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Trefle/32 - Roi de trefle.png",
        text: `Le roi de trèfle symbolise l'homme d'un âge mûr.<br><br>De par son conseil et de par son expérience il apportera la protection au consultant. Il se fait également signe de satisfaction personnelle pour le consultant en apportant de bonnes nouvelles sur le plan professionnel avec par exemple, une promotion ou une nomination à de nouvelles fonctions, une promotion, une prime.<br><br>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres ou à l'inverse plus positives il sera nécéssaire de la recouvrir pour obtenir des explications complémentaires et affiner la situation.`
    },
    "trefle-as": {
        title: "As de Trèfle",
        image: "<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Trefle/25 - As de trefle.png",
        text: `L'as de trèfle symbolise la réussite tant spirituelle que professionnelle.<br><br>Elle se fait signe de bien-être intérieur et de satisfaction. Pour le consultant il s'agit d'une période propice aux projets en gestation qu'il faudra mettre en oeuvre. Le succès est au rendez-vous.<br><br>Sentimentalement, une période propice aux joies de la vie de couple, le bonheur est à vos côtés il suffit de vous baisser. Spirituellement, il annonce un don inné pour la cartomancie, la voyance et se fait l'annonce d'une grande satisfaction spirituelle.<br><br>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres ou à l'inverse plus positives il sera nécéssaire de la recouvrir pour obtenir des explications complémentaires et affiner la situation.`
    },

    "carreau-7": {
        title: "Sept de Carreau",
        image: "<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Carreau/10 - 7 de carreau.png",
        text: `Le sept de carreau symbolise le monde des affaires<br><br>Il indique les négociations menées à leur terme ou les compromis qu'il faudra faire pour mener à bien un projet en cours comme la vente d'un bien immobilier par exemple<br><br>Elle signifie également la remise en cause et des changements d'orientation pour le consultant qui devra faire le point en ce qui concerne sa vie affective ou professionnelle de façon préméditée ou non. Cette démarche sera couronnée de succès.<br><br>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres ou à l'inverse plus positives il sera nécéssaire de la recouvrir pour obtenir des explications complémentaires et affiner la situation.`
    },
    "carreau-8": {
        title: "Huit de Carreau",
        image: "<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Carreau/11 - 8 de carreau.png",
        text: `Le huit de carreau symbolise l'innattendu et la nouveauté, les prédictions sont essentiellement positives.<br><br>Le huit de carreau peut symboliser des changements importants dans la vie personnelle ou professionnelle. Cela peut indiquer un déplacement, un voyage ou un changement de carrière. Cette carte est aussi liée à la communication. Elle peut signifier que vous devez exprimer vos pensées ou vos émotions plus clairement, ou qu'une communication importante est sur le point d'avoir lieu.<br><br>Le huit de carreau est une carte qui évoque également l'énergie et le dynamisme. Elle peut suggérer que vous êtes sur le point d'atteindre vos objectifs grâce à votre détermination et votre travail acharné.<br><br>Dans certains contextes, cette carte peut aussi signaler des défis à surmonter, mais il est important de garder à l'esprit que ces défis peuvent être des opportunités déguisées.<br><br>Dans le domaine matériel, le huit de carreau peut indiquer une période de prospérité ou une augmentation financière grâce à des efforts personnels.<br><br>En résumé, le huit de carreau en cartomancie est une carte dynamique qui reflète des changements, des défis, et une énergie positive concentrée sur la communication et l'action.<br><br>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres ou à l'inverse plus positives il sera nécéssaire de la recouvrir pour obtenir des explications complémentaires et affiner la situation.`
    },
    "carreau-9": {
        title: "Neuf de Carreau",
        image: "<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Carreau/12 - 9 de carreau.png",
        text: `Le neuf de carreau symbolise l'inattendu et le contretemps.<br><br>Il signifie que des obstacles se mettront en travers du chemin du consultant pouvant retarder ses projets, ses attentes.<br><br>Le neuf de carreau est également un signal d'alarme qui renseigne le consultant sur la malignité des personnes qu'il cotoie. En effet que ce soit en amour ou en affaire on le considère, a tort ou a raison, comme un empécheur de tourner en rond et l'on s'acharne à faire échouer ses projets dans l'oeuf. Il va falloir faire preuve d'ouverture d'esprit et de strategie pour renverser la situation.<br><br>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres ou à l'inverse plus positives il sera nécéssaire de la recouvrir pour obtenir des explications complémentaires et affiner la situation.`
    },
    "carreau-10": {
        title: "Dix de Carreau",
        image: "<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Carreau/13 - 10 de carreau.png",
        text: `Le dix de carreau symbolise la réussite dans les projets et l'aboutissement des efforts.<br><br>Le consultant s'est dévoué sur le plan professionnel.<br>L'évolution sonne à sa porte : promotion ou prime exceptionnelle.<br>Le déménagement, la mutation peuvent être à l'ordre du jour et il lui faudra saisir ces opportunités dans un avenir proche.<br><br>Dans le cercle familial il y a bien-être et satisfaction.<br>Il est possible que le consultant apprenne une naissance chez un être cher à son coeur et ou qu'il projette de prendre des vacances bien méritées : un voyage pour rencontrer un ami proche y compris par delà les rivières ou les mers.<br><br>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres ou à l'inverse plus positives il sera nécéssaire de la recouvrir pour obtenir des explications complémentaires et affiner la situation.`
    },
    "carreau-valet": {
        title: "Valet de Carreau",
        image: "<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Carreau/14 - Valet de carreau.png",
        text: `Le valet de carreau symbolise le messager.<br><br>Le jeune homme se fait porteur d'une nouvelle d'importance capitale.<br>Peut-être des informations pour l'avenir professionnel ou personnel du consultant via le facteur ou un mail mais également par une personne de son entourage proche ou d'un consultant extérieur comme un cartomancien, un voyant.<br><br>Le valet de carreau est souvent associé à des attributs tels que l'énergie, la créativité, et un certain impétueux. Il peut représenter une personne jeune, dynamique et pleine de projets, souvent avec une forte capacité d'adaptation. Dans un tirage, le valet de carreau peut également symboliser des nouvelles, des messages ou des invitations, en particulier en lien avec le domaine professionnel ou matériel.<br><br>Sur le plan affectif le valet de carreau signifie un renouveau et il indique qu'une relation va naître ou encore l'amélioration d'une relation déjà existante.<br><br>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres ou à l'inverse plus positives il sera nécéssaire de la recouvrir pour obtenir des explications complémentaires et affiner la situation.`
    },
    "carreau-dame": {
        title: "Dame de Carreau",
        image: "<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Carreau/15 - Dame de carreau.png",
        text: `La dame de carreau symbolise la femme influente et aisée.<br><br>Comme le roi de carreau elle se fait généralement signe de protection face aux médisances à la jalousie que peut rencontrer le consultant.<br><br>La reine de carreau signifie la femme d'affaire, elle éclaire d'un jour nouveau l'éxistence du consultant son existance professionnelle et il est probable qu'elle l'aide à voir les choses sous un autre angle que celui sous lequel il les avaient jusqu'alors envisagées.<br><br>Le consultant est protégé mais doit cependant se montrer prudent face aux personnes qui gravitent dans son cercle professionnel, familial ou amical.<br><br>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres ou à l'inverse plus positives il sera nécéssaire de la recouvrir pour obtenir des explications complémentaires et affiner la situation.`
    },
    "carreau-roi": {
        title: "Roi de Carreau",
        image: "<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Carreau/16 - Roi de carreau.png",
        text: `Le roi de carreau symbolise l'homme influent et aisé.<br><br>Signe de protection face aux médisances et à la jalousie que peut rencontrer le consultant, il doit se montrer prudent face aux personnes qui gravitent dans son cercle professionnel, familial ou amical.<br><br>Le roi de carreau signifie l'homme d'affaire, il éclaire d'un jour nouveau l'éxistence professionnelle du consultant et il est probable qu'il l'aide à voir les choses sous un autre angle que celui sous lequel il les avaient jusqu'alors envisagées.<br><br>Rien désormais ne semble détourner le consultant du succès dans ses entreprises. Le roi de carreau est gage de réussite. Le consultant doit avoir confiance en ses projets.<br><br>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres ou à l'inverse plus positives il sera nécéssaire de la recouvrir pour obtenir des explications complémentaires et affiner la situation.`
    },
    "carreau-as": {
        title: "As de Carreau",
        image: "<?php echo get_template_directory_uri(); ?>/assets/images/32cartes/Carreau/9 - As de carreau.png",
        text: `L'as de carreau symbolise la réussite dans l'entreprise.<br><br>Dans le monde du travail l'as de carreau signifie une rentrée d'argent inattendue, une promotion, une prime, pour un travail dans lequel le consultant s'est investi pleinement. Il bénéficie maintenant des retombées fructueuses de son investissement.<br><br>Ce peut également être l'aide d'un ami qui croit en les projets du consultant mais aussi le remboursement d'une dette sur laquelle il ne comptait plus, un gros héritage ou un gain au jeu. Quoi qu'il en soit l'argent qu'annonce l'as de carreau coulera en abondance.<br><br>Cette carte peut également indiquer plusieurs choses et placée à côté de cartes plus sombres ou à l'inverse plus positives il sera nécéssaire de la recouvrir pour obtenir des explications complémentaires et affiner la situation.`
    },
                    };

                    document.addEventListener('DOMContentLoaded', function() {
                        const modalOverlay = document.getElementById('carte-modal-overlay');
                        const closeBtn = document.querySelector('.carte-modal-close');
                        const modalTitle = document.getElementById('modal-carte-title');
                        const modalImg = document.getElementById('modal-carte-img');
                        const modalText = document.getElementById('modal-carte-text');

                        document.querySelectorAll('.carte-container').forEach(container => {
                            container.addEventListener('click', function() {
                                const cardId = this.getAttribute('data-card-id');
                                if (cartesData[cardId]) {
                                    modalTitle.textContent = cartesData[cardId].title;
                                    modalImg.src = cartesData[cardId].image;
                                    modalText.innerHTML = cartesData[cardId].text;
                                    modalOverlay.style.display = 'flex';
                                }
                            });
                        });

                        closeBtn.addEventListener('click', function() {
                            modalOverlay.style.display = 'none';
                        });

                        modalOverlay.addEventListener('click', function(e) {
                            if (e.target === modalOverlay) {
                                modalOverlay.style.display = 'none';
                            }
                        });
                    });
                </script>
            </div>
        </div>

                        <!-- Oracle Belline Content -->
        <div id="content-belline" class="spa-content-section">
            <h2 style="color: #ffcc00; text-align: center; font-style: italic;">Les lames de l'Oracle Belline</h2>
            <div style="text-align: center; margin-bottom: 20px;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/09_oracle_belline.png" alt="Oracle Belline Cards" style="max-width: 200px; height: auto;">
            </div>

            <p style="font-style: italic; font-weight: bold; text-align: center;">L'interprétation des cartes du Jeu de Belline requiert une bonne maîtrise des symboles ainsi qu'une sensibilité intuitive. Chaque carte peut apporter des éclairages sur des enjeux émotionnels, spirituels ou pratiques, et leur association peut mettre en lumière des dynamiques profondes de la situation examinée.</p>

            <p style="font-style: italic; font-weight: bold; text-align: center;">Le Jeu de Belline dépasse le cadre d'un simple outil de divination ; il constitue un véritable chemin vers la connaissance de soi et la compréhension des événements de la vie. Ce jeu propose une diversité d'interprétations qui permettent d'explorer des aspects cachés de votre existence. En tant qu'instrument de voyance, il encourage la réflexion et l'introspection, tout en ouvrant des perspectives vers l'avenir.</p>

            <p style="font-style: italic; font-weight: bold; text-align: center;">D'après les dires de Belline, une consultante qui déménageait pour se retirer à la campagne lui aurait demandé de venir prendre chez elle des documents qui pourraient l'intéresser. Il s'y serait rendu et aurait découvert ainsi des jeux de cartes et un manuscrit qui auraient pu être daté de plus d'un siècle et auraient pu appartenir à l'un des prédécesseurs dans les lieux, le célèbre Mage Edmond qui en son temps aurait prédit entre autres choses le succès littéraire à Alexandre Dumas, etc...</p>

            <p style="font-style: italic; font-weight: bold; text-align: center;">L'oracle de Belline est composé de cinquante-trois lames. Quatre d'entre elles sont indépendantes et les quarante-neuf lames restantes sont divisées en sept groupes de sept cartes, chaque groupe est sous l'influence d'une des sept planètes : La Lune, le Soleil, Mercure, Vénus, Mars, Jupiter et enfin Saturne.</p>

            <p style="font-style: italic; font-weight: bold; text-align: center;">Si vous vous tirez les cartes, prenez en compte les cartes à la gauche et à la droite des lames et définissez le sens particulier de celles-ci En effet, si une ou plusieurs cartes négatives entourent la lame tirée cela signifie qu'un évènement positif ne verra pas le jour ou qu'il sera atténué voir repoussé Dans le cas contraire et si cette lame est entourée par une ou deux cartes bénéfiques alors vous pourrez voir naître un changement positif.</p>

            <p style="font-style: italic; font-weight: bold; text-align: center; margin-bottom: 30px;">Pour obtenir de plus amples informations sur la signification des lames de l'Oracle Belline il vous suffit de cliquer sur la carte de votre choix.</p>

            <h3 style="color: #ffcc00; text-align: center; font-style: italic; text-decoration: underline;">Les lames qui ne sont pas sous influence planétaire</h3>
            <div class="cards-grid" style="display: flex; justify-content: center; gap: 10px; margin-bottom: 40px; flex-wrap: wrap;">
                <div class="carte-container" data-card-id="belline-0" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Carte Bleue</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/0-carte-bleue.jpg" alt="Carte Bleue" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-1" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">La Destinée</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/1-la-destinee.jpg" alt="La Destinée" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-2" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">L'Etoile de l'Homme</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/2-etoile-homme.jpg" alt="L'Etoile de l'Homme" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-3" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">L'Etoile de la Femme</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/3-etoile-femme.jpg" alt="L'Etoile de la Femme" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
            </div>

            <h3 style="color: #ffcc00; text-align: center; font-style: italic; text-decoration: underline;">Les lames sous influence du Soleil</h3>
            <div class="cards-grid" style="display: flex; justify-content: center; gap: 10px; margin-bottom: 40px; flex-wrap: wrap;">
                <div class="carte-container" data-card-id="belline-4" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">La Nativité</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/4-nativite.jpg" alt="La Nativité" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-5" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Réussite</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/5-reussite.jpg" alt="Réussite" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-6" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Élévation</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/6-elevation.jpg" alt="Élévation" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-7" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Honneurs</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/7-honneurs.jpg" alt="Honneurs" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-8" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Pensée Amitié</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/8-pensee.jpg" alt="Pensée Amitié" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-9" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Campagne Santé</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/9-campagne.jpg" alt="Campagne Santé" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-10" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Présents</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/10-presents.jpg" alt="Présents" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
            </div>

            <h3 style="color: #ffcc00; text-align: center; font-style: italic; text-decoration: underline;">Les lames sous influence de la Lune</h3>
            <div class="cards-grid" style="display: flex; justify-content: center; gap: 10px; margin-bottom: 40px; flex-wrap: wrap;">
                <div class="carte-container" data-card-id="belline-11" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Trahison</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/11-trahison.jpg" alt="Trahison" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-12" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Départ</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/12-depart.jpg" alt="Départ" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-13" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Inconstance</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/13-inconstance.jpg" alt="Inconstance" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-14" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Découverte</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/14-decouverte.jpg" alt="Découverte" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-15" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">L'Eau</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/15-eau.jpg" alt="L'Eau" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-16" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Les Pénates</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/16-penates.jpg" alt="Les Pénates" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-17" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Maladie</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/17-maladie.jpg" alt="Maladie" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
            </div>

            <h3 style="color: #ffcc00; text-align: center; font-style: italic; text-decoration: underline;">Les lames sous influence de Mercure</h3>
            <div class="cards-grid" style="display: flex; justify-content: center; gap: 10px; margin-bottom: 40px; flex-wrap: wrap;">
                <div class="carte-container" data-card-id="belline-18" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Changement</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/18-changement.jpg" alt="Changement" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-19" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">L'Argent</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/19-argent.jpg" alt="L'Argent" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-20" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">L'Intelligence</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/20-intelligence.jpg" alt="L'Intelligence" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-21" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Vol Perte</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/21-vol.jpg" alt="Vol Perte" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-22" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Entreprises</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/22-entreprises.jpg" alt="Entreprises" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-23" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Trafic</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/23-trafic.jpg" alt="Trafic" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-24" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Nouvelle</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/24-nouvelle.jpg" alt="Nouvelle" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
            </div>

            <h3 style="color: #ffcc00; text-align: center; font-style: italic; text-decoration: underline;">Les lames sous influence de Vénus</h3>
            <div class="cards-grid" style="display: flex; justify-content: center; gap: 10px; margin-bottom: 40px; flex-wrap: wrap;">
                <div class="carte-container" data-card-id="belline-25" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Plaisirs</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/25-plaisirs.jpg" alt="Plaisirs" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-26" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">La Paix</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/26-paix.jpg" alt="La Paix" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-27" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Union</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/27-union.jpg" alt="Union" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-28" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Famille</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/28-famille.jpg" alt="Famille" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-29" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Amour</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/29-amour.jpg" alt="Amour" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-30" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">La Table</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/30-table.jpg" alt="La Table" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-31" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Passions</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/31-passions.jpg" alt="Passions" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
            </div>

            <h3 style="color: #ffcc00; text-align: center; font-style: italic; text-decoration: underline;">Les lames sous influence de Mars</h3>
            <div class="cards-grid" style="display: flex; justify-content: center; gap: 10px; margin-bottom: 40px; flex-wrap: wrap;">
                <div class="carte-container" data-card-id="belline-32" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Méchanceté</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/32-mechancete.jpg" alt="Méchanceté" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-33" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Procès</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/33-proces.jpg" alt="Procès" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-34" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Despotisme</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/34-despotisme.jpg" alt="Despotisme" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-35" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Ennemis</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/35-ennemis.jpg" alt="Ennemis" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-36" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Pourparlers</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/36-pourparlers.jpg" alt="Pourparlers" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-37" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Le Feu</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/37-feu.jpg" alt="Le Feu" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-38" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Accident</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/38-accident.jpg" alt="Accident" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
            </div>

            <h3 style="color: #ffcc00; text-align: center; font-style: italic; text-decoration: underline;">Les lames sous influence de Jupiter</h3>
            <div class="cards-grid" style="display: flex; justify-content: center; gap: 10px; margin-bottom: 40px; flex-wrap: wrap;">
                <div class="carte-container" data-card-id="belline-39" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Appui</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/39-appui.jpg" alt="Appui" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-40" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Beauté</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/40-beaute.jpg" alt="Beauté" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-41" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Héritage</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/41-heritage.jpg" alt="Héritage" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-42" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Sagesse</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/42-sagesse.jpg" alt="Sagesse" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-43" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">La Renommée</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/43-renommee.jpg" alt="La Renommée" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-44" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Le Hasard</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/44-hazard.jpg" alt="Le Hasard" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-45" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Bonheur</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/45-bonheur.jpg" alt="Bonheur" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
            </div>

            <h3 style="color: #ffcc00; text-align: center; font-style: italic; text-decoration: underline;">Les lames sous influence de Saturne</h3>
            <div class="cards-grid" style="display: flex; justify-content: center; gap: 10px; margin-bottom: 40px; flex-wrap: wrap;">
                <div class="carte-container" data-card-id="belline-46" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Infortune</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/46-infortune.jpg" alt="Infortune" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-47" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Stérilité</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/47-sterilite.jpg" alt="Stérilité" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-48" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Fatalité</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/48-fatalite.jpg" alt="Fatalité" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-49" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">La Grâce</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/49-grace.jpg" alt="La Grâce" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-50" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Ruine</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/50-ruine.jpg" alt="Ruine" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-51" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Retard</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/51-retard.jpg" alt="Retard" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
                <div class="carte-container" data-card-id="belline-52" style="width: 80px; margin-bottom: 20px;">
                    <div class="carte-tooltip">Cloître</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle-belline/52-cloitre.jpg" alt="Cloître" class="carte-img" style="width: 80px; height: 140px; border: 2px solid #ccc; border-radius: 5px;" />
                </div>
            </div>

        </div>

        <!-- Les Tarots Content -->
        <div id="content-tarots" class="spa-content-section">
            <h2>Les Tarots</h2>
            <p><em>Contenu à venir...</em></p>
        </div>

        <!-- Méthodes Content -->
        <div id="content-methodes" class="spa-content-section">
            <h2>Méthodes</h2>
            <p><em>Contenu à venir...</em></p>
        </div>

        <!-- Planètes Content -->
        <div id="content-planetes" class="spa-content-section">
            <h2>Planètes</h2>
            <p><em>Contenu à venir...</em></p>
        </div>

    </div>
    </div> <!-- Close spa-container -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.spa-button');
            const sections = document.querySelectorAll('.spa-content-section');

            buttons.forEach(button => {
                button.addEventListener('click', function() {
                    const targetId = 'content-' + this.getAttribute('data-target');

                    // Hide all sections
                    sections.forEach(section => {
                        section.classList.remove('active');
                    });

                    // Show target section
                    const targetSection = document.getElementById(targetId);
                    if (targetSection) {
                        targetSection.classList.add('active');
                    }
                });
            });
        });
    </script>

</main><!-- #main -->

<?php
get_footer();
