<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['username'])) {
    header("Location: signin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil del Usuario - WolfTech</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            height: 100%;
            overflow: hidden;
        }
        #particle-canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #1a1a1a, #2c2c2c, #3d3d3d);
            z-index: -1;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            position: relative;
            z-index: 1;
        }
        .card {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            width: 100%;
            max-width: 400px;
            backdrop-filter: blur(10px);
        }
        .card-title {
            color: #fff;
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1.5rem;
            text-align: center;
        }
        .user-info {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        .avatar {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            background-color: #667eea;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: bold;
            margin-right: 1rem;
        }
        .user-details {
            flex-grow: 1;
        }
        .username {
            font-size: 1.2rem;
            font-weight: bold;
            color: #fff;
            margin: 0 0 0.5rem 0;
        }
        .email {
            font-size: 1rem;
            color: #ccc;
            margin: 0;
        }
        .button-container {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }
        .btn {
            flex: 1;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 0.75rem 1rem;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .logout-btn {
            background-color: #f56565;
        }
        .logout-btn:hover {
            background-color: #e53e3e;
        }
        .index-btn {
            background-color: #4299e1;
        }
        .index-btn:hover {
            background-color: #3182ce;
        }
    </style>
</head>
<body>
    <canvas id="particle-canvas"></canvas>
    <div class="container">
        <div class="card">
            <h1 class="card-title">Perfil de Usuario</h1>
            <div class="user-info">
                <div class="avatar">
                    <?php echo strtoupper(substr($_SESSION['username'], 0, 1)); ?>
                </div>
                <div class="user-details">
                    <p class="username"><?php echo htmlspecialchars($_SESSION['username']); ?></p>
                    <p class="email"><?php echo htmlspecialchars($_SESSION['email']); ?></p>
                </div>
            </div>
            <div class="button-container">
                <button class="btn index-btn" onclick="goToIndex()" >Volver al Índice</button>
                <button class="btn logout-btn" onclick="logout()">Cerrar sesión</button>
            </div>
        </div>
    </div>

    <script>
        function logout() {
            window.location.href = 'logout.php';
        }

        function goToIndex() {
            window.location.href = 'index.php';
        }

        const canvas = document.getElementById('particle-canvas');
        const ctx = canvas.getContext('2d');
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        let particlesArray = [];
        const numberOfParticles = 150;

        // Mouse position
        let mouse = {
            x: null,
            y: null,
            radius: 150
        }

        window.addEventListener('mousemove', function(event) {
            mouse.x = event.x;
            mouse.y = event.y;
        });

        // Create particle
        class Particle {
            constructor(x, y, directionX, directionY, size, color) {
                this.x = x;
                this.y = y;
                this.directionX = directionX;
                this.directionY = directionY;
                this.size = size;
                this.color = color;
            }
            // Method to draw individual particle
            draw() {
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2, false);
                ctx.fillStyle = this.color;
                ctx.fill();
            }
            // Check particle position, mouse position, move the particle, draw the particle
            update() {
                // Check if particle is still within canvas
                if (this.x > canvas.width || this.x < 0) {
                    this.directionX = -this.directionX;
                }
                if (this.y > canvas.height || this.y < 0) {
                    this.directionY = -this.directionY;
                }
                // Check collision detection - mouse position / particle position
                let dx = mouse.x - this.x;
                let dy = mouse.y - this.y;
                let distance = Math.sqrt(dx*dx + dy*dy);
                if (distance < mouse.radius + this.size){
                    if (mouse.x < this.x && this.x < canvas.width - this.size * 10) {
                        this.x += 10;
                    }
                    if (mouse.x > this.x && this.x > this.size * 10) {
                        this.x -= 10;
                    }
                    if (mouse.y < this.y && this.y < canvas.height - this.size * 10) {
                        this.y += 10;
                    }
                    if (mouse.y > this.y && this.y > this.size * 10) {
                        this.y -= 10;
                    }
                }
                // Move particle
                this.x += this.directionX;
                this.y += this.directionY;
                // Draw particle
                this.draw();
            }
        }

        // Create particle array
        function init() {
            particlesArray = [];
            for (let i = 0; i < numberOfParticles; i++) {
                let size = Math.random() * 3 + 1;
                let x = (Math.random() * ((innerWidth - size * 2) - (size * 2)) + size * 2);
                let y = (Math.random() * ((innerHeight - size * 2) - (size * 2)) + size * 2);
                let directionX = (Math.random() * 2) - 1;
                let directionY = (Math.random() * 2) - 1;
                let color = `rgba(${Math.random() * 200 + 55}, ${Math.random() * 200 + 55}, ${Math.random() * 200 + 55}, ${Math.random() * 0.5 + 0.5})`;

                particlesArray.push(new Particle(x, y, directionX, directionY, size, color));
            }
        }

        // Animation loop
        function animate() {
            requestAnimationFrame(animate);
            ctx.clearRect(0,0,innerWidth, innerHeight);

            for (let i = 0; i < particlesArray.length; i++) {
                particlesArray[i].update();
            }
            connect();
        }

        // Check if particles are close enough to draw line between them
        function connect() {
            let opacityValue = 1;
            for (let a = 0; a < particlesArray.length; a++) {
                for (let b = a; b < particlesArray.length; b++) {
                    let distance = ((particlesArray[a].x - particlesArray[b].x) * (particlesArray[a].x - particlesArray[b].x))
                    + ((particlesArray[a].y - particlesArray[b].y) * (particlesArray[a].y - particlesArray[b].y));
                    if (distance < (canvas.width/7) * (canvas.height/7)) {
                        opacityValue = 1 - (distance/20000);
                        ctx.strokeStyle = `rgba(200, 200, 200, ${opacityValue})`;
                        ctx.lineWidth = 1;
                        ctx.beginPath();
                        ctx.moveTo(particlesArray[a].x, particlesArray[a].y);
                        ctx.lineTo(particlesArray[b].x, particlesArray[b].y);
                        ctx.stroke();
                    }
                }
            }
        }

        // Resize event
        window.addEventListener('resize', function() {
            canvas.width = innerWidth;
            canvas.height = innerHeight;
            mouse.radius = 150;
            init();
        });

        // Mouse out event
        window.addEventListener('mouseout', function() {
            mouse.x = undefined;
            mouse.y = undefined;
        });

        init();
        animate();
    </script>
</body>
</html>