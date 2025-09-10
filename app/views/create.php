<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>📝 Create Student</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-100 p-8">
  <div class="max-w-lg mx-auto bg-white shadow-lg rounded-xl p-6 border border-green-300">
    <h1 class="text-3xl font-bold text-green-700 mb-6">📝 Create Student Record</h1>

    <form action="<?= site_url('users/create'); ?>" method="post" class="space-y-5">
      <div>
        <label for="last_name" class="block font-semibold text-green-800">👤 Last Name</label>
        <input type="text" id="last_name" name="last_name" class="w-full border border-green-300 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
      </div>

      <div>
        <label for="first_name" class="block font-semibold text-green-800">👤 First Name</label>
        <input type="text" id="first_name" name="first_name" class="w-full border border-green-300 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
      </div>

      <div>
        <label for="email" class="block font-semibold text-green-800">📧 Email</label>
        <input type="email" id="email" name="email" class="w-full border border-green-300 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
      </div>

      <div class="flex justify-between pt-4">
        <a href="<?= site_url('users/show'); ?>" class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold px-5 py-2 rounded-lg transition duration-200">Back to Show</a>
        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-2 rounded-lg transition duration-200">Submit</button>
      </div>
    </form>
  </div>
</body>
</html>