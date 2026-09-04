<?php
// MealJoy interface shell. Replace the demo data in assets/app.js with Laravel/PHP controllers after deployment setup.
?><!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#311241">
  <link rel="manifest" href="manifest.webmanifest">
  <title>MealJob | Your Meal Your Choice</title>
  <link rel="stylesheet" href="assets/app.css">
  <link rel="stylesheet" href="assets/extras.css">
</head>
<body>
  <main class="app-shell" id="app-shell">
    <section class="login-card" id="login-view">
      <img class="brand-logo" src="assets/mealjob-logo.png" alt="MealJob - Your Meal Your Choice">
      <p class="eyebrow">VEGETARIAN TIFFIN DELIVERY</p>
      <h1>Your meal, your choice.</h1>
      <p class="muted">Sign in to manage meals, kitchen preparation, deliveries, or operations.</p>
      <label for="email">Email or mobile number</label>
      <input id="email" type="text" placeholder="name@example.com or +91 98…">
      <button class="button primary" id="continue-login">Continue securely</button>
      <div class="demo-access">
        <span>Prototype view</span>
        <div class="role-buttons">
          <button data-login-role="customer">Customer</button>
          <button data-login-role="cook">Cook</button>
          <button data-login-role="rider">Rider</button>
          <button data-login-role="admin">Owner</button>
        </div>
      </div>
      <p class="tiny">Serving daily customers for 14+ years. Production sign-in uses verified email/password or phone OTP; staff accounts are owner-invited only.</p>
    </section>

    <section class="workspace hidden" id="workspace">
      <aside class="sidebar">
        <div class="sidebar-brand"><img src="assets/mealjob-logo.png" alt="MealJob"><span>MealJob</span></div>
        <nav id="side-nav" aria-label="Application navigation"></nav>
        <div class="sidebar-foot"><span class="role-pill" id="role-pill"></span><button class="text-button" id="logout">Sign out</button></div>
      </aside>
      <div class="main-area">
        <header class="topbar">
          <button class="menu-toggle" id="menu-toggle" aria-label="Open navigation">☰</button>
          <div><p class="eyebrow" id="page-kicker">MEALJOB</p><h2 id="page-title">Today</h2></div>
          <div class="topbar-actions"><span class="date-label">Tuesday, 16 September</span><button class="avatar" aria-label="Account">AS</button></div>
        </header>
        <div class="content" id="content"></div>
      </div>
    </section>
  </main>
  <template id="admin-template">
    <section class="page">
      <div class="page-heading"><div><p class="eyebrow">OWNER CONTROL CENTRE</p><h3>Today’s operations</h3><p class="muted">One view of production, delivery and revenue.</p></div><button class="button primary" data-action="open-menu">Manage menu</button></div>
      <div class="metric-grid"><article><span>Confirmed meals</span><strong>142</strong><em>+12 from yesterday</em></article><article><span>Kitchen ready</span><strong>96</strong><em>68% packed</em></article><article><span>Out for delivery</span><strong>38</strong><em>3 riders active</em></article><article><span>Exceptions</span><strong class="warning">2</strong><em>Need review</em></article></div>
      <div class="two-column"><section class="card"><div class="card-head"><h4>Delivery health</h4><button class="text-button">View riders</button></div><div class="route-list"><div><span class="status ready"></span><b>Ramesh Kumar</b><small>14 / 18 delivered</small></div><div><span class="status active"></span><b>Arjun Singh</b><small>8 stops remaining</small></div><div><span class="status delayed"></span><b>Meera Patel</b><small>1 delay awaiting review</small></div></div></section><section class="card"><div class="card-head"><h4>Needs attention</h4><button class="text-button">All exceptions</button></div><div class="notice"><b>Delayed delivery · #MJ-2841</b><p>Rider submitted in-app camera proof at 12:48 PM.</p><button class="button compact">Review case</button></div><div class="notice"><b>Menu stock warning</b><p>Paneer wrap alternative is low for dinner.</p></div></section></div>
    </section>
  </template>
  <template id="menu-template">
    <section class="page"><div class="page-heading"><div><p class="eyebrow">OWNER ONLY</p><h3>Menu manager</h3><p class="muted">Create, edit and publish vegetarian menus by date and delivery slot.</p></div><div class="button-row"><button class="button secondary" id="add-menu">+ Add dish</button><button class="button primary" id="publish-menu">Publish menu</button></div></div><div class="toolbar"><button class="tab active">Tuesday, 16 Sep</button><button class="tab">Wednesday, 17 Sep</button><button class="tab">Thursday, 18 Sep</button><span class="toolbar-space"></span><label class="switch-label">Customer visible <input type="checkbox" checked><span class="switch"></span></label></div><div class="menu-grid" id="menu-grid"></div></section>
  </template>
  <template id="customer-template">
    <section class="page"><div class="page-heading"><div><p class="eyebrow">GOOD MORNING, PRIYA</p><h3>Today’s meal</h3><p class="muted">Your lunch is on its way.</p></div><button class="button secondary">Add extra meal</button></div><div class="customer-grid"><section class="hero-card"><span class="chip">OUT FOR DELIVERY</span><h4>Lunch arrives <br>12:30–1:00 PM</h4><p>Rider Arjun is 1.2 km away.</p><div class="route-visual"><span class="pin start">K</span><i></i><span class="pin end">P</span></div><button class="button light">Track delivery</button></section><section class="card"><div class="card-head"><h4>Today’s menu</h4><button class="text-button">Change eligible item</button></div><div class="meal-line"><span class="food-icon">◒</span><div><b>Vegetable pulao</b><small>Vegan · contains nuts</small></div></div><div class="meal-line"><span class="food-icon">◐</span><div><b>Dal tadka</b><small>High-protein · no onion/garlic option</small></div></div><div class="meal-line"><span class="food-icon">◓</span><div><b>Seasonal salad</b><small>Freshly packed</small></div></div></section></div><div class="two-column"><section class="card"><div class="card-head"><h4>Meal calendar</h4><button class="text-button">Open calendar</button></div><div class="calendar-strip"><b>15<br><small>Mon</small></b><b class="selected">16<br><small>Tue</small></b><b>17<br><small>Wed</small></b><b>18<br><small>Thu</small></b><b>19<br><small>Fri</small></b><b>20<br><small>Sat</small></b></div></section><section class="card"><h4>Wallet & deposit</h4><div class="wallet"><span>₹ 480.00</span><small>Wallet balance · ₹600 tiffin deposit held separately</small></div></section></div></section>
  </template>
  <template id="cook-template">
    <section class="page"><div class="page-heading"><div><p class="eyebrow">KITCHEN</p><h3>Production board</h3><p class="muted">Only owner-published vegetarian menu items are shown here.</p></div><button class="button secondary">Report inventory issue</button></div><div class="metric-grid"><article><span>Lunch meals</span><strong>142</strong><em>Prepare by 11:45 AM</em></article><article><span>Dinner meals</span><strong>38</strong><em>Prepare by 6:15 PM</em></article><article><span>Jain / no onion-garlic</span><strong>24</strong><em>Separate packing labels</em></article><article><span>Low-oil</span><strong>11</strong><em>Separate packing labels</em></article></div><section class="kanban"><article><h4>Planned <span>142</span></h4><div class="batch"><b>Vegetable pulao</b><small>142 portions · lunch</small></div><div class="batch"><b>Dal tadka</b><small>142 portions · lunch</small></div></article><article><h4>Cooking <span>2</span></h4><div class="batch active-batch"><b>Dal tadka</b><small>Batch 2 of 3</small></div></article><article><h4>Packed <span>96</span></h4><div class="batch"><b>Lunch tiffins</b><small>96 sealed · pickup 12:05 PM</small></div></article><article><h4>Ready <span>0</span></h4><div class="empty-copy">Mark batches ready after the packing check.</div></article></section></section>
  </template>
  <template id="rider-template">
    <section class="page"><div class="page-heading"><div><p class="eyebrow">GOOD MORNING, ARJUN</p><h3>My route</h3><p class="muted">12 stops left · Lunch delivery route</p></div><label class="duty-toggle">On duty <input type="checkbox" checked><span class="switch"></span></label></div><div class="rider-grid"><section class="map-card"><div class="map-grid"><span class="map-stop one">1</span><span class="map-stop two">2</span><span class="map-stop three">3</span><span class="map-stop four">4</span><i class="map-route"></i></div><div class="map-legend"><span><i class="status active"></i> Your live route</span><button class="text-button">Open navigation</button></div></section><section class="card delivery-card"><span class="chip">STOP 3 OF 12</span><h4>Priya Shah</h4><p>2B, Lotus Residency, Sector 45</p><small>Lunch · 12:30–1:00 PM · 1 vegetarian tiffin</small><div class="stepper"><b>✓<small>Picked up</small></b><b>✓<small>Out</small></b><b class="current">3<small>Arrived</small></b><b>4<small>Delivered</small></b></div><div class="button-row"><button class="button secondary">Navigate</button><button class="button primary">Mark delivered</button></div><div class="exception-actions"><button>Report delay</button><button>Tiffin not received</button></div></section></div></section>
  </template>
  <script src="assets/app.js"></script>
</body>
</html>
