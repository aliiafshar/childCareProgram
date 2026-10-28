document.addEventListener('DOMContentLoaded', function () {
  var menuBtn = document.getElementById('mobile-menu-button');
  if (!menuBtn) return;
  
  var panel = document.createElement('div');
  panel.id = 'mobile-menu-panel';
  panel.style.cssText = 'display:none;position:fixed;top:0;left:0;width:100%;height:100%;z-index:999999;';
  panel.innerHTML = '<div id="mobile-menu-overlay" style="position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.75);"></div><div style="position:absolute;top:0;right:0;height:100%;width:260px;background:#096e80;"><div style="display:flex;align-items:center;justify-content:space-between;padding:12px 16px;border-bottom:1px solid rgba(255,255,255,0.2);"><span style="color:white;font-weight:600;">Menu</span><button id="mobile-menu-close" style="color:white;background:transparent;border:none;padding:6px 10px;font-size:18px;cursor:pointer;"><i class="fas fa-times"></i></button></div><div style="padding:8px 10px;"><a href="index.php" style="color:white;text-decoration:none;display:flex;align-items:center;gap:12px;padding:10px 8px;font-size:15px;"><i class="fa fa-home" style="width:18px;text-align:center;"></i>Home</a><a href="aboutme.php" style="color:white;text-decoration:none;display:flex;align-items:center;gap:12px;padding:10px 8px;font-size:15px;"><i class="fa fa-user" style="width:18px;text-align:center;"></i>About Me</a><a href="contactus.php" style="color:white;text-decoration:none;display:flex;align-items:center;gap:12px;padding:10px 8px;font-size:15px;"><i class="far fa-address-card" style="width:18px;text-align:center;"></i>Contact</a></div></div>';
  document.body.appendChild(panel);
  
  var closeBtn = panel.querySelector('#mobile-menu-close');
  var overlay = panel.querySelector('#mobile-menu-overlay');
  
  menuBtn.onclick = function() {
    panel.style.display = 'block';
    document.body.style.overflow = 'hidden';
  };
  function close() {
    panel.style.display = 'none';
    document.body.style.overflow = '';
  }
  if (closeBtn) closeBtn.onclick = close;
  if (overlay) overlay.onclick = close;
  var links = panel.getElementsByTagName('a');
  for (var i = 0; i < links.length; i++) {
    links[i].onclick = close;
  }
});
