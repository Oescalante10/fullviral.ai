<?php
// Captura los datos del formulario
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';

// Prepara el payload para el webhook
$payload = json_encode([
  'name' => $name,
  'email' => $email,
  'phone' => $phone
]);

// URL del webhook de Go High Level
$webhookURL = 'https://services.leadconnectorhq.com/hooks/hH6ptBZoknupPiFehzSV/webhook-trigger/994a267c-bfef-4fe6-ae71-3e97df68ea74';

// Enviar al webhook usando cURL
$ch = curl_init($webhookURL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
  'Content-Type: application/json',
  'Content-Length: ' . strlen($payload)
]);
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Solicitud Recibida - Full Viral</title>
    <meta name="description" content="Gracias por solicitar tu Análisis Estratégico con Full Viral." />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* MISMOS ESTILOS QUE LA LANDING PAGE */
        body {
            font-family: 'Inter', sans-serif;
            background-color: #0a0a0a;
            color: #d1d5db;
        }
        nav {
            background-color: rgba(26, 26, 26, 0.95);
            backdrop-filter: blur(4px);
            border-bottom: 1px solid #374151;
        }
        .gradient-text {
            background-image: linear-gradient(to right, #0066FF, #00D4FF);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        .gradient-button {
            background-image: linear-gradient(to right, #0066FF, #00D4FF);
        }
        .gradient-button:hover {
            box-shadow: 0 0 15px rgba(0, 212, 255, 0.5);
        }
        .gradient-bg-light {
             background-image: linear-gradient(to bottom right, rgba(0, 102, 255, 0.1), rgba(0, 212, 255, 0.1));
        }
        .bg-dark-primary { background-color: #0a0a0a; }
        .bg-dark-secondary { background-color: #1a1a1a; }
        .text-light { color: #ffffff; }
        .text-medium { color: #d1d5db; }
        .text-muted { color: #6b7280; }
        .text-accent { color: #00D4FF; }
        .border-medium { border-color: #374151; }
        .border-accent { border-color: #00D4FF; }
    </style>
</head>
<body class="bg-dark-primary text-medium">

    <nav class="fixed top-0 left-0 right-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold">
                <span class="text-light">Full</span><span class="gradient-text">Viral</span>
            </div>
            </div>
    </nav>

    <main class="pt-16">

        <section class="min-h-screen flex items-center justify-center bg-gradient-to-b from-dark-primary to-dark-secondary px-6 py-20">
            
            <div class="max-w-3xl mx-auto text-center gradient-bg-light border border-accent rounded-2xl p-8 md:p-12 shadow-2xl">
                
                <div class="text-6xl mb-6">✅</div>

                <h1 class="text-4xl md:text-5xl font-bold text-light mb-5">
                    ¡Análisis Solicitado!
                </h1>

                <p class="text-xl md:text-2xl text-medium mb-10 leading-relaxed">
                    Felicitaciones, Lider <?php echo htmlspecialchars($name); ?>. Has dado el primer paso para dejar de ser Operador y convertirte en <span class="text-accent font-bold">CEO Estratégico</span>.
                </p>

                <div class="bg-dark-primary border border-medium rounded-xl p-8 text-left max-w-lg mx-auto">
                    <h2 class="text-2xl font-semibold text-light mb-6 text-center">Siguiente Paso:</h2>
                    
                    <div class="space-y-5">
                        <div class="flex items-start gap-4">
                            <div>
                                <h3 class="text-lg font-semibold text-light">Espera nuestro mensaje por WhatsApp</h3>
                                <p class="text-muted">Uno de nuestros <strong class="text-medium">Estrategas</strong> te contactará al numero <strong><?php echo htmlspecialchars($phone); ?></strong> en breve para agendar tu sesión y diseñar el plan de acción que pondrá tu negocio en piloto automático.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="text-muted mt-10 text-sm">
                    Tu transformación ha comenzado.
                </p>

            </div>

        </section>

    </main>

    <footer class="bg-dark-primary border-t border-medium py-12">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-1 gap-8 mb-8">
                <div>
                    <h3 class="text-xl font-bold text-light mb-4">
                        Full<span class="text-accent">Viral</span>
                    </h3>
                    <p class="text-muted text-sm">
                        Ecosistema AI-Driven de marketing que automatiza tu embudo comercial. Socio estratégico de empresarios latinos.
                    </p>
                </div>
            </div>
            <div class="border-t border-medium pt-8 text-center text-muted text-sm space-y-2">
                <p>© 2024 Full Viral. Esta página no está afiliada con Facebook/Meta. Los resultados individuales pueden variar. Esta no es una garantía de ingresos específicos.</p>
              
            </div>
        </div>
    </footer>

</body>
</html>