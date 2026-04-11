<?php
// ============================================================
//  DATI PROFILO OWNER
// ============================================================
$owner = [
    'ign'       => 'Tegolah',
    'realname'  => 'David',
    'age'       => 15,
    'role'      => 'Owner',
    'bio'       => 'Mi chiamo David, ho 15 anni e sono appassionato di Minecraft da sempre. Ho iniziato come semplice giocatore, ma col tempo ho scoperto che quello che mi appassiona davvero è costruire community, gestire uno staff, creare esperienze di gioco uniche e far crescere un server da zero. Oggi sono Owner di HeroMC, il progetto a cui tengo di più.',
    'location'  => 'Italia 🇮🇹',
    'socials'   => [
        'discord' => 'tegolah',
        'tiktok'  => '',   // aggiungi se vuoi
        'youtube' => '',   // aggiungi se vuoi
        'instagram'=> '',  // aggiungi se vuoi
    ],
];

// ============================================================
//  DATI SERVER
// ============================================================
$server = [
    'name'     => 'HeroMC',
    'ip'       => 'play.heromc.it',
    'version'  => '1.8 - 1.21',
    'status'   => 'online',   // 'online' | 'offline' | 'maintenance'
    'stats'    => [
        ['label' => 'Giocatori Online', 'value' => '124',   'icon' => '🟢'],
        ['label' => 'Record Giocatori', 'value' => '891',   'icon' => '🏆'],
        ['label' => 'Utenti Registrati','value' => '14.320','icon' => '👥'],
        ['label' => 'Partite Giocate',  'value' => '230K+', 'icon' => '⚔️'],
    ],
    'gamemodes' => ['Survival', 'SkyBlock', 'BedWars', 'SkyWars', 'KitPvP', 'Factions'],
];

// Skin Minecraft tramite API pubblica (nessun dato hardcoded)
$skinUrl = "https://minotar.net/avatar/" . urlencode($owner['ign']) . "/128";

// Status colore
$statusColors = [
    'online'      => ['label' => 'ONLINE',      'color' => '#22c55e'],
    'offline'     => ['label' => 'OFFLINE',     'color' => '#ef4444'],
    'maintenance' => ['label' => 'MANUTENZIONE','color' => '#f59e0b'],
];
$statusInfo = $statusColors[$server['status']] ?? $statusColors['online'];
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($owner['ign']) ?> — <?= htmlspecialchars($server['name']) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        /* ── RESET & VARIABILI ───────────────────────────── */
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --bg:       #080c10;
            --bg2:      #0d1318;
            --bg3:      #111820;
            --panel:    #0f1923;
            --border:   #1e3040;
            --accent:   #00e5ff;
            --accent2:  #ff4d6d;
            --gold:     #ffd700;
            --text:     #cdd9e5;
            --text-dim: #5a7a8a;
            --glow:     0 0 20px rgba(0,229,255,.35);
            --glow2:    0 0 20px rgba(255,77,109,.35);
        }

        html { scroll-behavior: smooth; }

        body {
            background: var(--bg);
            color: var(--text);
            font-family: 'Rajdhani', sans-serif;
            font-size: 16px;
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* ── SFONDO ANIMATO ──────────────────────────────── */
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background:
                radial-gradient(ellipse 80% 50% at 20% 10%, rgba(0,229,255,.06) 0%, transparent 60%),
                radial-gradient(ellipse 60% 40% at 80% 80%, rgba(255,77,109,.05) 0%, transparent 55%);
            pointer-events: none;
            z-index: 0;
        }

        /* griglia pixel art in background */
        body::after {
            content: '';
            position: fixed;
            inset: 0;
            background-image:
                linear-gradient(rgba(0,229,255,.025) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0,229,255,.025) 1px, transparent 1px);
            background-size: 40px 40px;
            pointer-events: none;
            z-index: 0;
        }

        /* ── LAYOUT ──────────────────────────────────────── */
        .page {
            position: relative;
            z-index: 1;
            max-width: 960px;
            margin: 0 auto;
            padding: 40px 20px 80px;
        }

        /* ── HEADER / HERO ───────────────────────────────── */
        .hero {
            display: grid;
            grid-template-columns: auto 1fr;
            gap: 36px;
            align-items: center;
            background: var(--panel);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 36px 40px;
            position: relative;
            overflow: hidden;
            animation: fadeUp .6s ease both;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -60px; right: -60px;
            width: 300px; height: 300px;
            background: radial-gradient(circle, rgba(0,229,255,.08) 0%, transparent 70%);
            pointer-events: none;
        }

        /* Scan line decorativa */
        .hero::after {
            content: '';
            position: absolute;
            left: 0; right: 0;
            top: 0; height: 2px;
            background: linear-gradient(90deg, transparent, var(--accent), transparent);
            animation: scanline 3s ease-in-out infinite;
        }

        @keyframes scanline {
            0%,100% { opacity: .4; transform: scaleX(.3); }
            50%      { opacity: 1;  transform: scaleX(1); }
        }

        /* Avatar */
        .avatar-wrap {
            position: relative;
            width: 128px; height: 128px;
            flex-shrink: 0;
        }

        .avatar-wrap::before {
            content: '';
            position: absolute;
            inset: -4px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--accent), var(--accent2));
            animation: rotateBorder 4s linear infinite;
        }

        @keyframes rotateBorder {
            from { filter: hue-rotate(0deg); }
            to   { filter: hue-rotate(360deg); }
        }

        .avatar-wrap img {
            position: relative;
            z-index: 1;
            width: 128px; height: 128px;
            border-radius: 10px;
            image-rendering: pixelated;
            display: block;
        }

        /* Badge ruolo */
        .role-badge {
            position: absolute;
            bottom: -10px; left: 50%;
            transform: translateX(-50%);
            z-index: 2;
            background: linear-gradient(90deg, var(--accent), #0080ff);
            color: #000;
            font-family: 'Orbitron', monospace;
            font-size: 9px;
            font-weight: 700;
            letter-spacing: 2px;
            padding: 3px 10px;
            border-radius: 20px;
            white-space: nowrap;
            box-shadow: var(--glow);
        }

        /* Info testo */
        .hero-info { min-width: 0; }

        .hero-name {
            font-family: 'Orbitron', monospace;
            font-size: clamp(28px, 5vw, 44px);
            font-weight: 900;
            color: #fff;
            line-height: 1;
            letter-spacing: -1px;
            text-shadow: 0 0 30px rgba(0,229,255,.5);
        }

        .hero-name span { color: var(--accent); }

        .hero-sub {
            margin-top: 6px;
            font-size: 13px;
            color: var(--text-dim);
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        .hero-bio {
            margin-top: 16px;
            line-height: 1.7;
            color: var(--text);
            font-size: 15px;
            max-width: 540px;
        }

        .hero-meta {
            margin-top: 18px;
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .meta-pill {
            display: flex;
            align-items: center;
            gap: 6px;
            background: rgba(255,255,255,.05);
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 5px 14px;
            font-size: 13px;
            color: var(--text-dim);
            transition: border-color .2s, color .2s;
        }
        .meta-pill:hover { border-color: var(--accent); color: var(--accent); }
        .meta-pill .icon { font-size: 14px; }

        /* ── SEZIONE LABEL ───────────────────────────────── */
        .section {
            margin-top: 32px;
            animation: fadeUp .6s ease both;
        }
        .section:nth-child(2) { animation-delay: .1s; }
        .section:nth-child(3) { animation-delay: .2s; }
        .section:nth-child(4) { animation-delay: .3s; }

        .section-title {
            font-family: 'Orbitron', monospace;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: var(--accent);
            margin-bottom: 14px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .section-title::after {
            content: '';
            flex: 1;
            height: 1px;
            background: linear-gradient(90deg, var(--border), transparent);
        }

        /* ── STATS SERVER ────────────────────────────────── */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 14px;
        }

        .stat-card {
            background: var(--panel);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 20px 22px;
            position: relative;
            overflow: hidden;
            transition: transform .2s, border-color .2s, box-shadow .2s;
        }
        .stat-card:hover {
            transform: translateY(-3px);
            border-color: var(--accent);
            box-shadow: var(--glow);
        }
        .stat-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(0,229,255,.04), transparent);
            pointer-events: none;
        }

        .stat-icon { font-size: 22px; margin-bottom: 10px; display: block; }

        .stat-value {
            font-family: 'Orbitron', monospace;
            font-size: 26px;
            font-weight: 700;
            color: #fff;
            line-height: 1;
        }

        .stat-label {
            margin-top: 4px;
            font-size: 12px;
            color: var(--text-dim);
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        /* ── GAMEMODES ───────────────────────────────────── */
        .gamemodes {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .gm-tag {
            background: var(--bg3);
            border: 1px solid var(--border);
            border-radius: 6px;
            padding: 8px 18px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 1px;
            color: var(--text);
            transition: all .2s;
            cursor: default;
        }
        .gm-tag:hover {
            border-color: var(--accent2);
            color: var(--accent2);
            box-shadow: var(--glow2);
            transform: scale(1.04);
        }

        /* ── SOCIAL ──────────────────────────────────────── */
        .socials-list {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .social-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 20px;
            border-radius: 8px;
            border: 1px solid var(--border);
            background: var(--panel);
            color: var(--text);
            font-family: 'Rajdhani', sans-serif;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            transition: all .2s;
        }
        .social-btn:hover {
            border-color: var(--accent);
            color: #fff;
            box-shadow: var(--glow);
            transform: translateY(-2px);
        }
        .social-btn svg { width: 18px; height: 18px; fill: currentColor; }

        /* ── SERVER IP CARD ──────────────────────────────── */
        .ip-card {
            background: var(--panel);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 24px 28px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 16px;
        }

        .ip-left { display: flex; align-items: center; gap: 16px; }

        .status-dot {
            width: 10px; height: 10px;
            border-radius: 50%;
            background: <?= $statusInfo['color'] ?>;
            box-shadow: 0 0 10px <?= $statusInfo['color'] ?>;
            animation: pulse 2s ease-in-out infinite;
        }
        @keyframes pulse {
            0%,100% { opacity: 1; }
            50%      { opacity: .4; }
        }

        .ip-label {
            font-size: 11px;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--text-dim);
        }

        .ip-value {
            font-family: 'Orbitron', monospace;
            font-size: 20px;
            font-weight: 700;
            color: #fff;
            margin-top: 2px;
        }

        .ip-copy {
            background: linear-gradient(135deg, var(--accent), #0080ff);
            color: #000;
            border: none;
            border-radius: 8px;
            padding: 10px 24px;
            font-family: 'Orbitron', monospace;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 2px;
            cursor: pointer;
            transition: opacity .2s, transform .2s;
        }
        .ip-copy:hover { opacity: .85; transform: scale(1.04); }

        /* ── FOOTER ──────────────────────────────────────── */
        .footer {
            margin-top: 60px;
            text-align: center;
            font-size: 12px;
            color: var(--text-dim);
            letter-spacing: 2px;
        }
        .footer span { color: var(--accent); }

        /* ── ANIMAZIONI ──────────────────────────────────── */
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(24px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        /* ── RESPONSIVE ──────────────────────────────────── */
        @media (max-width: 600px) {
            .hero { grid-template-columns: 1fr; justify-items: center; text-align: center; padding: 28px 20px; }
            .hero-meta { justify-content: center; }
            .ip-card { flex-direction: column; align-items: flex-start; }
        }
    </style>
</head>
<body>
<div class="page">

    <!-- ═══ HERO ═══════════════════════════════════════════ -->
    <div class="hero">
        <div class="avatar-wrap">
            <img src="<?= htmlspecialchars($skinUrl) ?>"
                 alt="Skin di <?= htmlspecialchars($owner['ign']) ?>"
                 onerror="this.src='https://minotar.net/avatar/Steve/128'">
            <span class="role-badge"><?= htmlspecialchars($owner['role']) ?></span>
        </div>

        <div class="hero-info">
            <div class="hero-name">
                <?= htmlspecialchars($owner['ign']) ?>
                <span>_</span>
            </div>
            <div class="hero-sub"><?= htmlspecialchars($server['name']) ?> &nbsp;·&nbsp; <?= htmlspecialchars($owner['role']) ?></div>
            <p class="hero-bio"><?= htmlspecialchars($owner['bio']) ?></p>
            <div class="hero-meta">
                <span class="meta-pill"><span class="icon">📍</span><?= htmlspecialchars($owner['location']) ?></span>
                <span class="meta-pill"><span class="icon">🎂</span><?= (int)$owner['age'] ?> anni</span>
                <span class="meta-pill"><span class="icon">⛏️</span>Minecraft</span>
            </div>
        </div>
    </div>

    <!-- ═══ STATISTICHE SERVER ══════════════════════════════ -->
    <div class="section">
        <div class="section-title">📊 &nbsp;Statistiche Server</div>
        <div class="stats-grid">
            <?php foreach ($server['stats'] as $stat): ?>
            <div class="stat-card">
                <span class="stat-icon"><?= $stat['icon'] ?></span>
                <div class="stat-value"><?= htmlspecialchars($stat['value']) ?></div>
                <div class="stat-label"><?= htmlspecialchars($stat['label']) ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- ═══ SERVER IP ════════════════════════════════════════ -->
    <div class="section">
        <div class="section-title">🖥️ &nbsp;Connettiti al Server</div>
        <div class="ip-card">
            <div class="ip-left">
                <div class="status-dot"></div>
                <div>
                    <div class="ip-label">
                        <?= $statusInfo['label'] ?> &nbsp;·&nbsp; <?= htmlspecialchars($server['version']) ?>
                    </div>
                    <div class="ip-value"><?= htmlspecialchars($server['ip']) ?></div>
                </div>
            </div>
            <button class="ip-copy" onclick="copyIP()">COPIA IP</button>
        </div>
    </div>

    <!-- ═══ GAMEMODES ════════════════════════════════════════ -->
    <div class="section">
        <div class="section-title">🎮 &nbsp;Modalità di Gioco</div>
        <div class="gamemodes">
            <?php foreach ($server['gamemodes'] as $gm): ?>
            <span class="gm-tag"><?= htmlspecialchars($gm) ?></span>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- ═══ SOCIAL ═══════════════════════════════════════════ -->
    <?php
    $hasAnySocial = array_filter($owner['socials']);
    if ($hasAnySocial):
    ?>
    <div class="section">
        <div class="section-title">🔗 &nbsp;Social & Contatti</div>
        <div class="socials-list">

            <?php if (!empty($owner['socials']['discord'])): ?>
            <a class="social-btn" href="https://discord.com/users/<?= urlencode($owner['socials']['discord']) ?>" target="_blank" rel="noopener">
                <!-- Discord icon -->
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20.317 4.37a19.791 19.791 0 0 0-4.885-1.515.074.074 0 0 0-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 0 0-5.487 0 12.64 12.64 0 0 0-.617-1.25.077.077 0 0 0-.079-.037A19.736 19.736 0 0 0 3.677 4.37a.07.07 0 0 0-.032.027C.533 9.046-.32 13.58.099 18.057c.002.022.015.043.03.054a19.9 19.9 0 0 0 5.993 3.03.078.078 0 0 0 .084-.028c.462-.63.874-1.295 1.226-1.994a.076.076 0 0 0-.041-.106 13.107 13.107 0 0 1-1.872-.892.077.077 0 0 1-.008-.128 10.2 10.2 0 0 0 .372-.292.074.074 0 0 1 .077-.01c3.928 1.793 8.18 1.793 12.062 0a.074.074 0 0 1 .078.01c.12.098.246.198.373.292a.077.077 0 0 1-.006.127 12.299 12.299 0 0 1-1.873.892.077.077 0 0 0-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 0 0 .084.028 19.839 19.839 0 0 0 6.002-3.03.077.077 0 0 0 .032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 0 0-.031-.03zM8.02 15.33c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.956-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.956 2.418-2.157 2.418zm7.975 0c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.955-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.946 2.418-2.157 2.418z"/></svg>
                <?= htmlspecialchars($owner['socials']['discord']) ?>
            </a>
            <?php endif; ?>

            <?php if (!empty($owner['socials']['youtube'])): ?>
            <a class="social-btn" href="https://youtube.com/@<?= urlencode($owner['socials']['youtube']) ?>" target="_blank" rel="noopener">
                <!-- YouTube icon -->
                <svg viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                <?= htmlspecialchars($owner['socials']['youtube']) ?>
            </a>
            <?php endif; ?>

            <?php if (!empty($owner['socials']['tiktok'])): ?>
            <a class="social-btn" href="https://tiktok.com/@<?= urlencode($owner['socials']['tiktok']) ?>" target="_blank" rel="noopener">
                <!-- TikTok icon -->
                <svg viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-2.88 2.5 2.89 2.89 0 0 1-2.89-2.89 2.89 2.89 0 0 1 2.89-2.89c.28 0 .54.04.79.1V9.01a6.33 6.33 0 0 0-.79-.05 6.34 6.34 0 0 0-6.34 6.34 6.34 6.34 0 0 0 6.34 6.34 6.34 6.34 0 0 0 6.33-6.34V8.89a8.18 8.18 0 0 0 4.78 1.52V7.0a4.85 4.85 0 0 1-1.01-.31z"/></svg>
                <?= htmlspecialchars($owner['socials']['tiktok']) ?>
            </a>
            <?php endif; ?>

            <?php if (!empty($owner['socials']['instagram'])): ?>
            <a class="social-btn" href="https://instagram.com/<?= urlencode($owner['socials']['instagram']) ?>" target="_blank" rel="noopener">
                <!-- Instagram icon -->
                <svg viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/></svg>
                <?= htmlspecialchars($owner['socials']['instagram']) ?>
            </a>
            <?php endif; ?>

        </div>
    </div>
    <?php endif; ?>

    <!-- ═══ FOOTER ════════════════════════════════════════════ -->
    <div class="footer">
        &copy; <?= date('Y') ?> &nbsp;<span><?= htmlspecialchars($server['name']) ?></span> &nbsp;·&nbsp;
        Made with ❤️ by <span><?= htmlspecialchars($owner['ign']) ?></span>
    </div>

</div><!-- /page -->

<script>
function copyIP() {
    const ip = <?= json_encode($server['ip']) ?>;
    navigator.clipboard.writeText(ip).then(() => {
        const btn = document.querySelector('.ip-copy');
        const orig = btn.textContent;
        btn.textContent = 'COPIATO ✓';
        btn.style.background = 'linear-gradient(135deg, #22c55e, #16a34a)';
        setTimeout(() => {
            btn.textContent = orig;
            btn.style.background = '';
        }, 2000);
    });
}
</script>
</body>
</html>
