<?php include('includes/header.php'); ?>

<section class="browse-hero">
  <h1>Our Products</h1>
  <p>Premium Fasteners, Nuts, Washers & Eyebolts – engineered for precision and strength.</p>
</section>

<section class="browse-section">
  <!-- FASTENING -->
  <div class="category">
    <h2>Fastening</h2>
    <div class="product-grid">
      <?php
      $fastening = [
        "sockethead",
        "panphilips",
        "hexheads",
        "buttonhead",
        "sockethead",
        "selftapping",
        "set",
        "standoff",
        "threaded",
        "wing"
      ];
      foreach ($fastening as $item) {
        echo "
        <div class='product-card'>
          <img src='images/fasteners/$item.jpg' alt='$item'>
          <h3>$item</h3>
        </div>";
      }
      ?>
    </div>  
  </div>

  <!-- EYEBOLTS -->
  <div class="category">
    <h2>Eyebolts</h2>
    <div class="product-grid">
      <div class="product-card">
        <img src="images/sample_eyebolt.jpg" alt="Eyebolts">
        <h3>Eyebolts</h3>
      </div>
    </div>
  </div>

  <!-- NUTS -->
  <div class="category">
    <h2>Nuts</h2>
    <div class="product-grid">
      <?php
      $nuts = [
        "Hex Nuts",
        "Lock Nuts",
        "Flange Nuts",
        "Coupling Nuts",
        "Cap/Dome Nuts",
        "Press-fit Nuts",
        "Wing / Thumb Nuts",
        "T / Profile Nuts"
      ];
      foreach ($nuts as $item) {
        echo "
        <div class='product-card'>
          <img src='images/sample_nut.jpg' alt='$item'>
          <h3>$item</h3>
        </div>";
      }
      ?>
    </div>
  </div>

  <!-- WASHERS -->
  <div class="category">
    <h2>Washers</h2>
    <div class="product-grid">
      <?php
      $washers = [
        "General Purpose Washers",
        "Oversized Washers",
        "Nylon Washers"
      ];
      foreach ($washers as $item) {
        echo "
        <div class='product-card'>
          <img src='images/sample_washer.jpg' alt='$item'>
          <h3>$item</h3>
        </div>";
      }
      ?>
    </div>
  </div>
</section>

<?php include('includes/footer.php'); ?>
