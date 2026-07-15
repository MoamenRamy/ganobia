@extends('layouts.main')
@section('content')



<script>
(function() {
    'use strict';

    const elementsToHide = [
        'header', 'nav', 'aside', 'footer',
        '.navbar', '.sidebar', '.menu', '.top-nav', '.side-menu',
        '.main-header', '.header', '#header', '#sidebar',
        '.wrapper', '.container-fluid', '.content-wrapper'
    ];

    elementsToHide.forEach(selector => {
        const elements = document.querySelectorAll(selector);
        elements.forEach(el => {
            el.style.display = 'none';
            el.style.visibility = 'hidden';
            el.style.opacity = '0';
        });
    });

    document.body.style.border = 'none';
    document.body.style.margin = '0';
    document.body.style.padding = '0';
    document.body.style.background = '#0a0a0a';
    document.documentElement.style.background = '#0a0a0a';
})();
</script>

<div class="full-login-page">
    <canvas id="particles-canvas"></canvas>

    <div class="login-content">
        <div class="login-header">
            <div class="logo-box">
                <img src="{{ asset('images/الشعار_الجديد_.jpg-removebg-preview.png') }}" alt="الشعار" onerror="this.style.display='none'">
            </div>
            <h1 class="main-title">فرع الأفراد</h1>
        </div>

        <div class="login-form-box">
            <div class="form-header">
                <h2>تسجيل الدخول</h2>
            </div>

            <form id="loginForm" method="POST">
                @csrf

                <div class="form-group">
                    <i class="fas fa-user form-icon"></i>
                    <input type="text" name="username" placeholder="اسم المستخدم" required>
                </div>

                <div class="form-group">
                    <i class="fas fa-lock form-icon"></i>
                    <input type="password" name="password" placeholder="كلمة المرور" required>
                </div>

                <button type="submit" class="submit-button">
                    <i class="fas fa-sign-in-alt"></i> تسجيل الدخول
                </button>
            </form>
        </div>
    </div>
</div>

<script>
const canvas = document.getElementById('particles-canvas');
const ctx = canvas.getContext('2d');
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

let particles = [];

class Particle {
    constructor() {
        this.x = Math.random() * canvas.width;
        this.y = Math.random() * canvas.height;
        this.size = Math.random() * 2 + 1;
        this.speedX = Math.random() * 1 - 0.5;
        this.speedY = Math.random() * 1 - 0.5;
    }

    update() {
        this.x += this.speedX;
        this.y += this.speedY;

        if(this.x > canvas.width || this.x < 0) this.speedX *= -1;
        if(this.y > canvas.height || this.y < 0) this.speedY *= -1;
    }

    draw() {
        ctx.fillStyle = 'rgba(100, 150, 255, 0.6)';
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
        ctx.fill();
    }
}

function init() {
    particles = [];
    const numberOfParticles = (canvas.width * canvas.height) / 15000;
    for(let i = 0; i < numberOfParticles; i++) {
        particles.push(new Particle());
    }
}

function animate() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    particles.forEach(p => {
        p.update();
        p.draw();
    });
    requestAnimationFrame(animate);
}

init();
animate();

window.addEventListener('resize', () => {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    init();
});

document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const btn = this.querySelector('.submit-button');
    const originalText = btn.innerHTML;

    btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> جاري التحقق...';
    btn.disabled = true;

    setTimeout(() => {
        btn.innerHTML = '<i class="fas fa-check"></i> تم بنجاح!';
        btn.style.background = 'linear-gradient(135deg, #27ae60 0%, #229954 100%)';

        setTimeout(() => {
            btn.innerHTML = originalText;
            btn.style.background = '';
            btn.disabled = false;
            alert('تم تسجيل الدخول بنجاح');
        }, 1500);
    }, 1500);
});
</script>

@endsection
