<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>📋 Show Students</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-100 p-8">
  <div class="max-w-5xl mx-auto bg-white shadow-lg rounded-xl p-6 border border-green-300">
    <h1 class="text-3xl font-bold text-green-700 mb-6 text-center">📋 Students List</h1>

    <div class="overflow-x-auto mb-6">
      <table class="min-w-full bg-white border border-green-300 rounded-lg">
        <thead>
          <tr class="bg-green-200 text-left text-green-900">
            <th class="py-2 px-4 border-b">ID</th>
            <th class="py-2 px-4 border-b">Last Name</th>
            <th class="py-2 px-4 border-b">First Name</th>
            <th class="py-2 px-4 border-b">Email</th>
            <th class="py-2 px-4 border-b text-center">⚙️ Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach (html_escape($users) as $user): ?>
            <tr class="hover:bg-green-50">
              <td class="py-2 px-4 border-b"><?= $user['id']; ?></td>
              <td class="py-2 px-4 border-b"><?= $user['last_name']; ?></td>
              <td class="py-2 px-4 border-b"><?= $user['first_name']; ?></td>
              <td class="py-2 px-4 border-b"><?= $user['email']; ?></td>
              <td class="py-2 px-4 border-b text-center">
                <a href="<?= site_url('users/update/' . $user['id']); ?>" class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded-lg font-medium">Update</a>
                <a href="<?= site_url('users/delete/' . $user['id']); ?>" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-lg font-medium ml-2">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <div class="text-right">
      <a href="<?= site_url('users/create'); ?>" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-2 rounded-lg transition duration-200">➕ Create Record</a>
    </div>
  </div>
</body>
</html>