<div class="menubar-area footer-fixed">
  <div class="toolbar-inner menubar-nav">
    <?php
      use Illuminate\Support\Facades\Auth;
     ?>
    <?php if ( Auth::check() && Auth::user()->role_id == 3): ?>
      <a href="{{ route('user.dashboard') }}" class="nav-link {{ (Route::is('user.dashboard')) ? 'active' : '' }}">
        <i class="fi fi-rr-home"></i>
      </a>
      <a href="{{ route('favorite') }}" class="nav-link {{ (Route::is('favorite')) ? 'active' : '' }}">
        <i class="fi fi-rr-heart"></i>
      </a>
      <a href="{{ route('recipes') }}" class="nav-link">
        <i class="fi fi-rr-book"></i>
      </a>
      <a href="{{ route('user-profile') }}" class="nav-link {{ (Route::is('user-profile')) ? 'active' : '' }}">
        <i class="fi fi-rr-user"></i>
      </a>
    <?php else: ?>
      <a href="{{ route('/') }}" class="nav-link {{ (Route::is('/')) ? 'active' : '' }}">
        <i class="fi fi-rr-home"></i>
      </a>
      <a href="{{ route('recipes') }}" class="nav-link">
        <i class="fi fi-rr-book"></i>
      </a>
      <a href="{{ route('signin') }}" class="nav-link">
        <i class="fi fi-rr-heart"></i>
      </a>
      <a href="{{ route('signin') }}" class="nav-link">
        <i class="fi fi-rr-user"></i>
      </a>
    <?php endif; ?>
  </div>
</div>
