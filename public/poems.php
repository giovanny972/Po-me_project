<?php
$title = "liste de poëmes";
require_once './assets/header.php';
?>
<link rel="stylesheet" href="./styles/poems.css">

<?php
const POEMS = [
    "love" => [
        "On considère que les neuf dixièmes du code correspondent à environ 90% du temps de développement. Les 10% restant correspondent également à 90% du temps de développement — Tom Cargill",
        "J’ai toujours rêvé que mon ordinateur soit aussi simple à utiliser que mon téléphone. Ce rêve est devenu réalité : je ne comprends plus comment utiliser mon téléphone — Bjarne Stroustrup",
        "Un ordinateur vous permet de faire plus de bêtises, beaucoup plus rapidement, que n’importe quelle autre invention dans l’histoire de l’humanité. À l’exception notable des armes à feu et de la tequila — Mitch Ratcliffe",
        "Il y existe deux manières de concevoir un logiciel. La première, c’est de le faire si simple qu’il est évident qu’il ne présente aucun problème. La seconde, c’est de le faire si compliqué qu’il ne présente aucun problème évident. La première méthode est de loin la plus complexe — C.A.R. Hoare",
        "Vous ne pouvez pas comprendre la récursivité sans avoir d’abord compris la récursivité — Auteur Inconnu.",
        "Le fossé séparant théorie et pratique est moins large en théorie qu’il ne l’est en pratique — Auteur Inconnu"
    ],
    "peace" => [
        "L'histoire offre cent exemples d'une paix sans dignité amenant toujours une guerre acharnée. - Louis-Napoléon Bonaparte",
        "Le seul bonheur réel est la paix de l'âme, c'est sans doute ce qui rend souvent le pauvre plus heureux que le riche. - Auguste-Louis Petiet ",
        " Un homme qui a rendu sa femme heureuse peut mourir avec une certaine paix. - Anne Barratin ",
        " Parmi les bienfaits que le dieu du ciel a accordés aux misérables mortels, la paix est celui qui l'emporte de beaucoup sur tous les autres : Je parle de celle que, parmi ses trésors, ses pompes et ses délices, le monde voit si rarement de nos jours, de celle que fait naître en nos cœurs un caractère aimable et doux, et un amour véritable et sincère, Que cet amour, que cette véritable paix vous unisse entre mari et femme, vous enlace et vous enchaîne ; et que le temps ne puisse jamais en rompre les nœuds. - Nicolas Machiavel ",
        "Le traditionnel « Paix à ses cendres » n'implique pas l'oubli des vivantes saloperies défuntes. - Pierre Dac",
        " Mieux vaut un mensonge qui procure la paix qu'une vérité qui déclenche une guerre. - Les maximes et sentences orientales"
    ],
    "freedom" => [
        "Si les ouvriers construisaient les bâtiments comme les développeurs écrivent leurs programmes, le premier pivert venu aurait détruit toute civilisation — Gerald Weinberg",
        "Si debugger, c’est supprimer des bugs, alors programmer ne peut être que les ajouter — Edsger Dijkstra",
        "Mesurer la progression du développement d’un logiciel à l’aune de ses lignes de code revient à mesurer la progression de la construction d’un avion à l’aune de son poids — Bill Gates",
        "Neuf femmes ne peuvent pas faire un bébé en un mois — Fred Brooks",
        "Aujourd’hui, la programmation est devenue une course entre le développeur, qui s’efforce de produire de meilleures applications à l’épreuve des imbéciles et l’univers, qui s’efforce de produire de meilleurs imbéciles. Pour l’instant, l’univers a une bonne longueur d’avance — Rich Cook",
        "Les deux principales inventions sorties de Berkeley sont UNIX et le LSD. Difficile de croire à une quelconque coïncidence — Jeremy S. Anderson"
    ],
    "friendship" => [
        "Avant de vouloir qu’un logiciel soit réutilisable, il faudrait d’abord qu’il ait été utilisable — Ralph Johnson",
        "Quand la pensée humaine est tortueuse, labyrinthique, détournée, quand les mots expriment toujours le contraire de ce que l’on pense, le sens et l’effet de la formule du code informatique sont parfaitement identiques. - Pierre Ducrozet ",
        "Selon Mon Opinion égocentrique, les programmes C de la plupart des gens devraient être indentés de six pieds sous terre et recouverts de terre. - Blair P. Houghton ",
        "Si Java avait un vrai garbage collector (collecteur de déchets, ndt), la plupart des programmes se supprimeraient eux-mêmes lors de l'exécution. - Robert Sewell ",
        "Nous autres, mordus d’informatique, préférons par-dessus tout passer notre temps à bidouiller nos ordinateurs, plutôt que les utiliser pour faire quelque chose de productif. - Dave Barry ",
        "Cookie : Anciennement petit gâteau sucré, qu’on acceptait avec plaisir. Aujourd’hui : petit fichier informatique drôlement salé, qu’il faut refuser avec véhémence - Luc Fayard "
    ],
    "dream" => [
        "Comme la Hongrie, le monde informatique a une langue qui lui est propre. Mais il y a une différence. Si vous restez assez longtemps avec des Hongrois, vous finirez bien par comprendre de quoi ils parlent. - Dave Barry",
        "Les logiciels sont comme le sexe, c'est meilleur lorsque c'est libre. (Linus Torvalds)",
        "Commit du soir, espoir. Build du matin, chagrin.",
        "Les simulations, comme les bikinis, montrent pas mal de choses mais cachent le principal. (Hubert Kirrman)",
        "Qui a besoin de voir des films d'horreur lorsqu'il a déjà Windows 95 ? (Christine Comaford, PC Week, 27 septembre 1995)",
        "Un clavier AZERTY en vaut deux"
    ],
    "happiness" => [
        "Avec Windows 98, nous étions au bord du gouffre. Avec Windows ME, nous avons fait un grand pas en avant. (anonyme)",
        "Un programme informatique fait ce que vous lui avez dit de faire, pas ce que vous voulez qu'il fasse. - 3e loi de Greer de Loi de Murphy",
        "Un projet qui commence en retard finira en retard. Un projet qui commence à l'heure finira en retard. - Anonyme",
        "Le jour où Windows inventera quelque chose qui ne plante pas, ce sera un clou - Anonyme",
        "Internet Explorer sert à installer Mozilla Firefox. - Tout le monde",
        "Linux : un noyau, Windows : des pépins !"
    ],

];
?>

<div id="caroussel">
<form action="" method="post">
    <input type="radio" name="fancy" autofocus value="amour" id="amour" />
    <input type="radio" name="fancy" value="liberté" id="liberté" />
    <input type="radio" name="fancy" value="montagne" id="montagne" />
    <input type="radio" name="fancy" value="mer" id="mer" />
    <input type="radio" name="fancy" value="ocean" id="ocean" />			
    <label for="amour" >Aléatoire 1 <p class="poems"><?= POEMS[$_COOKIE["theme"]][rand(0, 5)]?></p></label>
    <label for="liberté"> Aléatoire 2 <p class="poems"><?= POEMS[$_COOKIE["theme"]][rand(0, 5)]?></p></label>
    <label for="montagne"> Aléatoire 3 <p class="poems"><?= POEMS[$_COOKIE["theme"]][rand(0, 5)]?></p></label>
    <label for="mer"> Aléatoire 4 <p class="poems"><?= POEMS[$_COOKIE["theme"]][rand(0, 5)]?></p></label>
    <label for="ocean"> Aléatoire 5 <p class="poems"><?= POEMS[$_COOKIE["theme"]][rand(0, 5)]?></label>
</form>
</div>

			<!-- <div class="reading"><a href="/poem.php" style="color:black"; >Appuyer ici pour lire le poème</a></div> -->

<script src="./functions/getPoem.js"></script>

<?php
require_once './assets/footer.php';
?>