<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>🔥 Welcome to LavaLust</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-100 p-8">
  <div class="max-w-5xl mx-auto bg-white shadow-lg rounded-xl p-6 border border-green-300">
    <h1 class="text-4xl font-bold text-green-700 mb-2 text-center">🔥 LavaLust Framework</h1>
    <p class="text-center text-gray-600 mb-8">Lightweight • Fast • MVC for PHP Developers</p>

    <section class="mb-8">
      <h2 class="text-2xl font-semibold text-green-800 mb-2">📖 What is LavaLust?</h2>
      <p class="text-gray-700">LavaLust is a lightweight PHP framework that follows the MVC (Model–View–Controller) pattern. It's designed for developers who want a structured yet minimalistic PHP development experience.</p>
    </section>

    <section class="mb-8">
      <h2 class="text-2xl font-semibold text-green-800 mb-4">🚀 Key Features</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <div class="bg-green-50 border border-green-200 rounded-lg p-4">
          <h3 class="font-bold text-green-700 mb-2">🧠 MVC Architecture</h3>
          <p class="text-gray-700">Clear separation of concerns with Models, Views, and Controllers.</p>
        </div>
        <div class="bg-green-50 border border-green-200 rounded-lg p-4">
          <h3 class="font-bold text-green-700 mb-2">⚙️ Built-in Routing</h3>
          <p class="text-gray-700">Clean and flexible routing system similar to Laravel or CodeIgniter.</p>
        </div>
        <div class="bg-green-50 border border-green-200 rounded-lg p-4">
          <h3 class="font-bold text-green-700 mb-2">📦 Libraries & Helpers</h3>
          <p class="text-gray-700">Includes utilities for sessions, forms, database, validation, and more.</p>
        </div>
        <div class="bg-green-50 border border-green-200 rounded-lg p-4">
          <h3 class="font-bold text-green-700 mb-2">📁 Organized Structure</h3>
          <p class="text-gray-700">Modular folder structure for scalable app development.</p>
        </div>
        <div class="bg-green-50 border border-green-200 rounded-lg p-4">
          <h3 class="font-bold text-green-700 mb-2">🔗 REST API Support</h3>
          <p class="text-gray-700">Build RESTful APIs easily using built-in tools and conventions.</p>
        </div>
        <div class="bg-green-50 border border-green-200 rounded-lg p-4">
          <h3 class="font-bold text-green-700 mb-2">📘 ORM-like Models</h3>
          <p class="text-gray-700">Use LavaLust's model layer for structured database operations with ease.</p>
        </div>
      </div>
    </section>

    <section class="mb-8">
      <h2 class="text-2xl font-semibold text-green-800 mb-2">📂 Project Structure</h2>
      <pre class="bg-green-50 border-l-4 border-green-400 p-4 text-sm text-gray-700 rounded-lg overflow-x-auto">
/app
  /config
  /controllers
  /helpers
  /language
  /libraries
  /models
  /views
/console
/public
/runtime
/scheme
      </pre>
    </section>

    <section class="mb-8">
      <h2 class="text-2xl font-semibold text-green-800 mb-2">🧪 Quick Example</h2>
      <p class="text-gray-700 mb-2">Route in <code class="bg-green-50 px-2 py-1 rounded">app/config/routes.php</code></p>
      <pre class="bg-green-50 border-l-4 border-green-400 p-4 text-sm text-gray-700 rounded-lg overflow-x-auto">
$router->get('/', 'Welcome::index');
      </pre>
      <p class="text-gray-700 mb-2">Controller method in <code class="bg-green-50 px-2 py-1 rounded">app/controllers/Welcome.php</code>:</p>
      <pre class="bg-green-50 border-l-4 border-green-400 p-4 text-sm text-gray-700 rounded-lg overflow-x-auto">
class Welcome extends Controller {
    public function index() {
        $this->call->view('welcome_page');
    }
}
      </pre>
      <p class="text-gray-700">View file at: <code class="bg-green-50 px-2 py-1 rounded">app/Views/welcome_page.php</code></p>
    </section>

    <section class="mb-8">
      <h2 class="text-2xl font-semibold text-green-800 mb-2">📚 Learn More</h2>
      <ul class="list-disc list-inside text-gray-700">
        <li><a href="https://github.com/ronmarasigan/LavaLust" class="text-blue-600 hover:underline">GitHub Repository</a></li>
        <li><a href="https://lavalust.netlify.app/" class="text-blue-600 hover:underline">Official Documentation</a></li>
      </ul>
    </section>

    <div class="text-sm text-center text-gray-600 border-t pt-4">
      Page rendered in <strong><?php echo lava_instance()->performance->elapsed_time('lavalust'); ?></strong> seconds.
      Memory usage: <?php echo lava_instance()->performance->memory_usage(); ?>.
      <?php if(config_item('ENVIRONMENT') === 'development'): ?>
        <br>LavaLust Version <strong><?php echo config_item('VERSION'); ?></strong>
      <?php endif; ?>
    </div>
  </div>
</body>
</html>