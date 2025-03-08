<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Student Grades 2.0</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<div class="flex items-center justify-center min-h-screen bg-gray-100 px-4">
    <div class="w-full max-w-lg bg-white shadow-lg rounded-2xl overflow-hidden">
      
      <!-- Card Header -->
      <div class="bg-gradient-to-r from-blue-500 to-purple-600 text-white text-center py-4">
        <h3 class="text-2xl font-bold">📌 Add a Grade</h3>
      </div>
  
      <!-- Card Body -->
      <div class="p-6">
        <form action="{{ route('posts.store') }}" method="post">
          @csrf
  
          <!-- Course Selection -->
          <div class="mb-4">
            <label for="course" class="block text-gray-700 font-medium">📚 Course</label>
            <select class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400" id="course" name="course" required>
              <option value="" disabled selected>Select Course</option>
              <option value="BSIT">BSIT (Information Technology)</option>
              <option value="BSPSYCH">BSPSYCH (Psychology)</option>
              <option value="THEO">THEO (Theology)</option>
              <option value="EDUC">EDUC (Education)</option>
              <option value="BSBA">BSBA (Business Administration)</option>
              <option value="BSHM">BSHM (Hospitality Management)</option>
            </select>
          </div>
  
          <!-- Student Name -->
          <div class="mb-4">
            <label for="name" class="block text-gray-700 font-medium">👤 Student Name</label>
            <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400" required>
          </div>
  
          <!-- Year Level -->
          <div class="mb-4">
            <label for="year" class="block text-gray-700 font-medium">🎓 Year Level</label>
            <select id="year" name="year" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400" required>
              <option value="" disabled selected>Select Year</option>
              <option value="1st Year">1st Year</option>
              <option value="2nd Year">2nd Year</option>
              <option value="3rd Year">3rd Year</option>
              <option value="4th Year">4th Year</option>
            </select>
          </div>
  
          <!-- Semester Level -->
          <div class="mb-4">
            <label for="semester" class="block text-gray-700 font-medium">📅 Semester Level</label>
            <select id="semester" name="semester" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400" required>
              <option value="" disabled selected>Select Semester</option>
              <option value="1st Semester">1st Semester</option>
              <option value="2nd Semester">2nd Semester</option>
            </select>
          </div>
  
          <hr class="my-4">
  
          <!-- Grades Input -->
          <div class="grid grid-cols-2 gap-4">
            <div>
              <label for="prelim" class="block text-gray-700 font-medium">🟢 Prelim</label>
              <input type="number" id="prelim" name="prelim" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-green-400" required>
            </div>
            <div>
              <label for="midterm" class="block text-gray-700 font-medium">🔵 Midterm</label>
              <input type="number" id="midterm" name="midterm" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400" required>
            </div>
            <div>
              <label for="prefinal" class="block text-gray-700 font-medium">🟠 Pre-final</label>
              <input type="number" id="prefinal" name="prefinal" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-yellow-400" required>
            </div>
            <div>
              <label for="final" class="block text-gray-700 font-medium">🔴 Final</label>
              <input type="number" id="final" name="final" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-red-400" required>
            </div>
          </div>
  
          <!-- Submit Button -->
          <div class="mt-6 text-center">
            <button type="submit" class="w-full py-3 bg-green-500 text-white font-bold rounded-lg hover:bg-green-600 transition">
              ✅ Create Grade
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
</body>
</html>
