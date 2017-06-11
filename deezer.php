<?php
// GROUPES


$group1=[
    'name' => 'Louise Attaque',
    'fans'=> '336014',
    'active' => 'true',
    'members' => 'Gaëtan Roussel, Arnaud Samuel, Robin Feix, Alexandre Margraff'
];
$coldplay=[
    'name' => 'Coldplay',
    'fans'=> '11343676',
    'active' => 'true',
    'members' => 'Chris Martin, Guy Berryman, Jon Buckland, Will Champion'
];
$group2=[
    'name' => 'U2',
    'fans'=> '3776210',
    'active' => 'true',
    'members' => 'Bono, The Edge, Adam Clayton, Larry Mullen Junior, Ivan McCormick, Peter Martin, Dik Evans'
];
$group3=[
    'name' => 'Queen',
    'fans'=> '5531303',
    'active' => 'false',
    'members' => 'Freddie Mercury, Brian May, Roger Taylor, John Deacon, Mike Grose, Spike Edney, Doug Bogie, Barry Mitchell'
];
$group4=[
    'name' => 'The Beatles',
    'fans'=> '3412906',
    'active' => 'false',
    'members' => 'John Lennon, Paul McCartney, George Harrison, Ringo Starr'
];
$group5=[
    'name' => 'The Rolling Stones',
    'fans'=> '3977329',
    'active' => 'true',
    'members' => 'Mick Jagger, Keith Richards, Ron Wood, Charlie Watts'
];
$group6=[
    'name' => 'Nirvana',
    'fans'=> '6226653',
    'active' => 'false',
    'members' => 'Kurt Cobain, Dave Grohl, Krist Novoselic, Pat Smear'
];
$group7=[
    'name' => 'Pink Floyd',
    'fans'=> '3507791',
    'active' => 'false',
    'members' => 'David Gilmour, Roger Waters, Syd Barrett, Richard Wright, Nick Mason'
];

// COMMENTAIRES

$comment1=[
    'pseudo' => 'Clément',
    'seconds' => '89037',
    'comment' => 'Du rock ? Mon oeil !',
    'category' => 'rock',
];
$comment2=[
    'pseudo' => 'java57',
    'seconds' => '9837',
    'comment' => 'Le meilleur groupe de rock de tous les temps !',
    'category' => 'rock',
];
$comment3=[
    'pseudo' => 'Yacham',
    'seconds' => '9737',
    'comment' => 'Faites un ptit tour sur ma playlist',
    'category' => 'rock',
];
$comment4=[
    'pseudo' => 'Suzanne',
    'seconds' => '8737',
    'comment' => 'j\'adore ça je kiffe Freddy mercury',
    'category' => 'jazz',
];
$comment5=[
    'pseudo' => 'rv41',
    'seconds' => '8012',
    'comment' => 'Jamais, jamais il y aura un autre freddy....25ans snif',
    'category' => 'rock',
];
$comment6=[
    'pseudo' => 'gerty50',
    'seconds' => '7500',
    'comment' => 'nostalgie !.... mais que cela fait du bien d\'écouter cette voix superbe !...',
    'category' => 'rock',
];
$comment7=[
    'pseudo' => 'Myriam Claude Chardon',
    'seconds' => '7620',
    'comment' => 'grosse pensée pour toi mon Fab!!!! tu me manques .....',
    'category' => 'rock',
];
$comment8=[
    'pseudo' => 'Bastien Dja Daouadji',
    'seconds' => '92047',
    'comment' => 'Sérieux honteux de mettre en couverture un groupe qui a rien à voir avec le groupe de rock QUEEN Deezer: YOU HAD ONE JOB for god sake....',
    'category' => 'jazz',
];
$comment9=[
    'pseudo' => 'Matthias',
    'seconds' => '100037',
    'comment' => 'Groooossse erreur ils ont mélangé les morceaux du vrai Queen avec un homonyme vraiment pourri',
    'category' => 'jazz',
];
$comment10=[
    'pseudo' => 'Rockeur',
    'seconds' => '5432',
    'comment' => 'playlist de métal svp metter des commentaires http://www.deezer.com/playlist/1368668055',
    'category' => 'rock',
];
$comment11=[
    'pseudo' => 'BRU NOI',
    'seconds' => '356',
    'comment' => 'http://www.deezer.com/playlist/1215050481',
    'category' => 'rock',
];
$comment12=[
    'pseudo' => 'gregmax46',
    'seconds' => '215',
    'comment' => 'Un des plus grand groupes de rock Freddie Mercury un phénomène sur scéne',
    'category' => 'jazz',
];


 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
        <title>Deezer Rock</title>
    </head>
    <body>
        <h1>Challenge Deezer Rock</h1>
        <hr/>
        <table>
            <td>
                <tr><td><?php echo $group1['name'] ?></td></tr>
                <tr><td><?php echo $group1['fans'] ?></td></tr>
                <tr><td>Members</td></tr>
                <tr><td><?php echo $group1['members'] ?></td></tr>
            </td>
        </table>
        <hr/>
                <li><?php echo $comment1['pseudo']. ' : '. $comment1['comment'] ?></li>
                <li><?php echo $comment3['pseudo']. ' : '. $comment3['comment'] ?></li>
        <hr/>
        <hr/>
        <table>
            <td>
                <tr><td><?php echo $group2['name'] ?></td></tr>
                <tr><td><?php echo $group2['fans'] ?></td></tr>
                <tr><td>Members</td></tr>
                <tr><td><?php echo $group2['members'] ?></td></tr>
            </td>
        </table>
        <hr/>
                <li><?php echo $comment2['pseudo']. ' : '. $comment2['comment'] ?></li>
        <hr/>
        <hr/>
        <table>
            <td>
                <tr><td><?php echo $group3['name'] ?></td></tr>
                <tr><td><?php echo $group3['fans'] ?></td></tr>
                <tr><td>Members</td></tr>
                <tr><td><?php echo $group3['members'] ?></td></tr>
            </td>
        </table>
        <hr/>
                <li><?php echo $comment4['pseudo']. ' : '. $comment4['comment'] ?></li>
                <li><?php echo $comment5['pseudo']. ' : '. $comment5['comment'] ?></li>
                <li><?php echo $comment6['pseudo']. ' : '. $comment6['comment'] ?></li>
                <li><?php echo $comment7['pseudo']. ' : '. $comment7['comment'] ?></li>
                <li><?php echo $comment9['pseudo']. ' : '. $comment9['comment'] ?></li>
                <li><?php echo $comment12['pseudo']. ' : '. $comment12['comment'] ?></li>
        <hr/>
        <hr/>
        <table>
            <td>
                <tr><td><?php echo $group4['name'] ?></td></tr>
                <tr><td><?php echo $group4['fans'] ?></td></tr>
                <tr><td>Members</td></tr>
                <tr><td><?php echo $group4['members'] ?></td></tr>
            </td>
        </table>
        <hr/>
                <li><?php echo $comment11['pseudo']. ' : '. $comment11['comment'] ?></li>
        <hr/>
        <hr/>
        <table>
            <td>
                <tr><td><?php echo $group5['name'] ?></td></tr>
                <tr><td><?php echo $group5['fans'] ?></td></tr>
                <tr><td>Members</td></tr>
                <tr><td><?php echo $group5['members'] ?></td></tr>
            </td>
        </table>
        <hr/>
                <li><?php echo $comment10['pseudo']. ' : '. $comment10['comment'] ?></li>
        <hr/>
        <hr/>
        <table>
            <td>
                <tr><td><?php echo $group6['name'] ?></td></tr>
                <tr><td><?php echo $group6['fans'] ?></td></tr>
                <tr><td>Members</td></tr>
                <tr><td><?php echo $group6['members'] ?></td></tr>
            </td>
        </table>
        <hr/>
                <li><?php echo $comment7['pseudo']. ' : '. $comment7['comment'] ?></li>
        <hr/>
        <hr/>
        <table>
            <td>
                <tr><td><?php echo $group7['name'] ?></td></tr>
                <tr><td><?php echo $group7['fans'] ?></td></tr>
                <tr><td>Members</td></tr>
                <tr><td><?php echo $group7['members'] ?></td></tr>
            </td>
        </table>
        <hr/>
                <li><?php echo $comment3['pseudo']. ' : '. $comment3['comment'] ?></li>
        <hr/>
        <hr/>
    </body>
</html>
