<?php
$owner = [
    "ign"       => "Tegolah",
    "real_name" => "David",
    "age"       => 15,
    "bio"       => "Mi chiamo David, ho 15 anni e sono appassionato di Minecraft da sempre. Ho iniziato come semplice giocatore, ma col tempo ho scoperto che quello che mi appassiona davvero è costruire community: gestire uno staff, creare esperienze di gioco uniche e far crescere un server da zero. Oggi sono Owner di HeroMC, il progetto a cui tengo di più.",
    "location"  => "Italia",
    "discord"   => "tegolah",
];

$experiences = [
    [
        "server"  => "HeroMC",
        "site"    => "heromc.it",
        "url"     => "https://heromc.it",
        "ip"      => "play.heromc.it",
        "role"    => "Owner",
        "tier"    => "owner-active",
        "from"    => "Marzo 2026",
        "to"      => "Oggi",
        "active"  => true,
        "desc"    => "Fondatore e owner di HeroMC. Mi occupo di tutto: dall'infrastruttura tecnica alla gestione dello staff, dagli eventi in-game alla crescita della community. Il mio obiettivo è creare un server dove ogni giocatore si senta a casa.",
        "tags"    => ["Gestione server", "Community", "Staff management", "Amministrazione"],
    ],
    [
        "server"  => "ZenytCloud",
        "site"    => "zenytcloud.com",
        "url"     => "https://zenytcloud.com",
        "ip"      => null,
        "role"    => "Staff",
        "tier"    => "staff",
        "from"    => "Aprile 2026",
        "to"      => "Oggi",
        "active"  => true,
        "desc"    => "Staff di ZenytCloud, servizio di hosting web. Mi occupo del supporto clienti e della gestione delle richieste tecniche, contribuendo a garantire un servizio affidabile e di qualità per tutti gli utenti della piattaforma.",
        "tags"    => ["Hosting web", "Supporto clienti", "Staff"],
    ],
    [
        "server"  => "PixelMC",
        "site"    => null,
        "url"     => null,
        "ip"      => null,
        "role"    => "Owner",
        "tier"    => "owner",
        "from"    => "Ottobre 2025",
        "to"      => "Dicembre 2025",
        "active"  => false,
        "desc"    => "Proprietario e responsabile dell'intera operazione di PixelMC. Ho curato la configurazione del server, il reclutamento dello staff e la moderazione della community per oltre due mesi.",
        "tags"    => ["Owner", "Configurazione", "Reclutamento"],
    ],
    [
        "server"  => "AllayMC",
        "site"    => "allaymc.uk",
        "url"     => null,
        "ip"      => "play.allaymc.uk",
        "role"    => "Helper",
        "tier"    => "helper",
        "from"    => "Settembre 2025",
        "to"      => "Ottobre 2025",
        "active"  => false,
        "desc"    => "Il mio primo ruolo nello staff. Mi sono occupato del supporto ai giocatori in chat e in ticket, segnalazione di bug e applicazione delle regole del server. Il punto di partenza di tutto.",
        "tags"    => ["Supporto", "Moderazione", "Bug report"],
    ],
];

$stats = [
    ["val" => "7+",  "label" => "Mesi esperienza"],
    ["val" => "4",   "label" => "Server"],
    ["val" => "2",   "label" => "Server fondati"],
    ["val" => "15",  "label" => "Anni"],
];

$skills = [
    ["name" => "Gestione community",     "pct" => 90],
    ["name" => "Staff management",       "pct" => 85],
    ["name" => "Configurazione server",  "pct" => 75],
    ["name" => "Problem solving",        "pct" => 88],
    ["name" => "Moderazione",            "pct" => 92],
];

$tools = [
    ["name" => "Photoshop",  "pct" => 78, "icon" => "ps"],
    ["name" => "Photopea",   "pct" => 85, "icon" => "pp"],
];

$testimonials = [
    [
        "name"   => "Blackout_GG",
        "role"   => "Moderatore — HeroMC",
        "stars"  => 5,
        "text"   => "Tegolah è una delle persone più serie e organizzate che abbia mai incontrato in questo ambiente. Sa gestire lo staff con fermezza ma anche con rispetto, riesce sempre a risolvere i problemi prima ancora che diventino un problema. Lavorare con lui su HeroMC è stata un esperienza che mi ha fatto crescere.",
    ],
    [
        "name"   => "Skywarden",
        "role"   => "Builder — HeroMC",
        "stars"  => 5,
        "text"   => "Ho fatto parte dello staff di HeroMC fin dall inizio e posso dire che Tegolah non è solo un owner, è un vero leader. Ascolta le idee di tutti, prende le decisioni giuste e tiene il server in piedi anche nei momenti più difficili. Raro trovare qualcuno così dedito a 15 anni.",
    ],
    [
        "name"   => "LunaStorm_",
        "role"   => "Helper — AllayMC",
        "stars"  => 5,
        "text"   => "Quando ero helper su AllayMC, Tegolah era uno dei colleghi più affidabili. Sempre disponibile, rispondeva velocemente ai ticket e non lasciava mai un giocatore senza risposta. Si vedeva già che aveva un approccio da owner, non da semplice helper.",
    ],
    [
        "name"   => "x_Reaper99",
        "role"   => "Admin — PixelMC",
        "stars"  => 4,
        "text"   => "Su PixelMC ho lavorato con lui per tutta la durata del server. Ha tenuto in piedi il progetto con pochissime risorse, gestendo staff, configurazioni e community in contemporanea. Notevole per l età che ha.",
    ],
];
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($owner['ign']) ?> — Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;700;800&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; }
        
        :root {
            --bg: #05050a;
            --text: #f0ede8;
            --muted: rgba(240,237,232,0.45);
            --green: #3ddc68;
            --gold: #f5c842;
            --r-lg: 18px;
        }
        
        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--bg);
            color: var(--text);
            min-height: 100vh;
            overflow-x: hidden;
        }
        
        .wrap {
            max-width: 760px;
            margin: 0 auto;
            padding: 2.5rem 1.5rem 5rem;
        }
        
        .hero {
            border-radius: var(--r-lg);
            padding: 2.25rem 2.5rem;
            margin-bottom: 1.25rem;
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.10);
        }
        
        .hero-name {
            font-family: 'Syne', sans-serif;
            font-size: clamp(30px, 5.5vw, 46px);
            font-weight: 800;
            letter-spacing: -1.5px;
            line-height: 1;
            margin-bottom: 5px;
            color: var(--text);
        }
        
        .hero-sub {
            font-size: 13.5px;
            color: var(--muted);
            margin-bottom: 15px;
        }
        
        .section {
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.10);
            border-radius: var(--r-lg);
            padding: 1.65rem;
            margin-bottom: 1.25rem;
        }
        
        .section-title {
            font-family: 'Syne', sans-serif;
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--text);
        }
        
        .experience-item {
            margin-bottom: 1.4rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid rgba(255,255,255,0.07);
        }
        
        .experience-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
            margin-bottom: 0;
        }
        
        .exp-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 8px;
        }
        
        .exp-title {
            font-family: 'Syne', sans-serif;
            font-size: 16px;
            font-weight: 700;
            color: var(--text);
        }
        
        .exp-role {
            font-size: 11px;
            font-weight: 600;
            padding: 3px 10px;
            border-radius: 999px;
            background: rgba(61,220,104,0.13);
            color: #3ddc68;
            border: 1px solid rgba(61,220,104,0.28);
            white-space: nowrap;
        }
        
        .exp-meta {
            font-size: 12px;
            color: var(--muted);
            margin-bottom: 8px;
        }
        
        .exp-desc {
            font-size: 13.5px;
            color: rgba(240,237,232,0.57);
            line-height: 1.6;
            margin-bottom: 8px;
        }
        
        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
        }
        
        .tag {
            font-size: 10px;
            padding: 3px 9px;
            border-radius: 6px;
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(255,255,255,0.065);
            color: var(--muted);
        }
        
        .stats {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 10px;
            margin-bottom: 1.25rem;
        }
        
        .stat-card {
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.10);
            border-radius: var(--r-lg);
            padding: 1rem;
            text-align: center;
        }
        
        .stat-value {
            font-family: 'Syne', sans-serif;
            font-size: 24px;
            font-weight: 800;
            color: var(--text);
            margin-bottom: 5px;
        }
        
        .stat-label {
            font-size: 11px;
            color: var(--muted);
        }
        
        @media(max-width: 560px) {
            .wrap { padding: 1.5rem 1rem 3rem; }
            .stats { grid-template-columns: repeat(2, 1fr); }
            .exp-header { flex-direction: column; gap: 5px; }
        }
    </style>
</head>
<body>

<div class="wrap">
    <!-- Hero Section -->
    <section class="hero">
        <h1 class="hero-name"><?= htmlspecialchars($owner['ign']) ?></h1>
        <p class="hero-sub">
            <?= htmlspecialchars($owner['real_name']) ?>, <?= (int)$owner['age'] ?> anni • 
            <?= htmlspecialchars($owner['location']) ?> • 
            Discord: <?= htmlspecialchars($owner['discord']) ?>
        </p>
        <p class="exp-desc"><?= htmlspecialchars($owner['bio']) ?></p>
    </section>

    <!-- Stats Section -->
    <div class="stats">
        <?php foreach ($stats as $stat): ?>
            <div class="stat-card">
                <div class="stat-value"><?= htmlspecialchars($stat['val']) ?></div>
                <div class="stat-label"><?= htmlspecialchars($stat['label']) ?></div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Experience Section -->
    <section class="section">
        <h2 class="section-title">Esperienza</h2>
        <?php foreach ($experiences as $exp): ?>
            <div class="experience-item">
                <div class="exp-header">
                    <h3 class="exp-title"><?= htmlspecialchars($exp['server']) ?></h3>
                    <span class="exp-role"><?= htmlspecialchars($exp['role']) ?></span>
                </div>
                <div class="exp-meta">
                    <?= htmlspecialchars($exp['from']) ?> - <?= htmlspecialchars($exp['to']) ?>
                </div>
                <p class="exp-desc"><?= htmlspecialchars($exp['desc']) ?></p>
                <div class="tags">
                    <?php foreach ($exp['tags'] as $tag): ?>
                        <span class="tag"><?= htmlspecialchars($tag) ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </section>

    <!-- Skills Section -->
    <section class="section">
        <h2 class="section-title">Competenze</h2>
        <?php foreach ($skills as $skill): ?>
            <div style="margin-bottom: 1rem;">
                <div style="display: flex; justify-content: space-between; margin-bottom: 5px; font-size: 13px;">
                    <span><?= htmlspecialchars($skill['name']) ?></span>
                    <span style="color: var(--green);"><?= (int)$skill['pct'] ?>%</span>
                </div>
                <div style="height: 4px; background: rgba(255,255,255,0.065); border-radius: 999px; overflow: hidden;">
                    <div style="height: 100%; width: <?= (int)$skill['pct'] ?>%; background: linear-gradient(90deg, var(--green) 0%, #80eea4 100%); transition: width 1s ease;"></div>
                </div>
            </div>
        <?php endforeach; ?>
    </section>

</div>

<script>
    // Semplice animazione al caricamento
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.experience-item').forEach((el, idx) => {
            setTimeout(() => el.style.opacity = '1', idx * 100);
        });
    });
</script>

</body>
</html>
