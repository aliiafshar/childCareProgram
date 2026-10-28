<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php 
      $pageName = ucfirst(basename($_SERVER['PHP_SELF'], '.php'));
      if (strtolower($pageName) == 'index') { echo 'Home'; }
      elseif (strtolower($pageName) == 'aboutme') { echo 'About Me'; }
      elseif (strtolower($pageName) == 'contactus') { echo 'Contact'; }
      else { echo $pageName; }
    ?> - Future Stars Daycare
  </title>
  <meta name="description" content="Future Stars Daycare - Licensed home childcare in San Jose, CA. Love, Learn, Grow & Develop with a safe, nurturing environment.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: { 50:'#e6f9fc',100:'#ccf3f9',200:'#99e7f3',300:'#66dbed',400:'#33cfe7',500:'#0fb8d4',600:'#0c93aa',700:'#096e80',800:'#064955',900:'#03242b' },
            accent: { 500:'#f59e0b',600:'#d97706' }
          },
          fontFamily: { display:['Nunito','sans-serif'], body:['Inter','sans-serif'] }
        }
      }
    }
  </script>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
