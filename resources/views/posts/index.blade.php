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

<body class="bg-gray-100">

  <!-- Navigation Bar -->
  <nav class="bg-gradient-to-r from-orange-500 to-red-500 shadow-lg p-4">
    <div class="container mx-auto flex justify-between items-center">
      <a class="text-white text-2xl font-bold" href="{{ route('posts.index') }}">📚 STUDENT GRADES 2.0</a>
      <a class="bg-green-600 text-white px-4 py-2 rounded-lg text-lg shadow-md hover:bg-green-700 transition" href="{{ route('posts.create') }}">➕ Add Student</a>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container mx-auto mt-8 grid grid-cols-1 md:grid-cols-2 gap-6 px-4">
    @foreach ($posts as $post)
      @php 
        $add_grades = $post->prelim + $post->midterm + $post->prefinal + $post->final;
        $calculate = round($add_grades / 4, 2);
      @endphp

      <!-- Student Card -->
      <div class="bg-white shadow-lg rounded-lg p-5 transition transform hover:-translate-y-2 hover:shadow-xl">
        
        <!-- Course Header -->
        <div class="bg-gradient-to-r from-blue-500 to-purple-600 text-white text-center font-bold text-lg py-3 rounded-t-lg">
          {{ $post->course }}
        </div>

        <!-- Card Body -->
        <div class="p-4">
          <p class="text-gray-800"><strong>👤 Name:</strong> {{ $post->name }}</p>
          <p class="text-gray-800"><strong>🎓 Year:</strong> {{ $post->year }}</p>
          <p class="text-gray-800"><strong>📅 Semester:</strong> {{ $post->semester }}</p>
          <hr class="my-3">

          <!-- Grades Display -->
          <div class="grid grid-cols-2 gap-3 text-center">
            <span class="bg-green-500 text-white px-3 py-1 rounded-lg text-lg shadow">🟢 Prelim: {{ $post->prelim }}</span>
            <span class="bg-blue-500 text-white px-3 py-1 rounded-lg text-lg shadow">🔵 Midterm: {{ $post->midterm }}</span>
            <span class="bg-yellow-500 text-white px-3 py-1 rounded-lg text-lg shadow">🟠 Pre-final: {{ $post->prefinal }}</span>
            <span class="bg-red-500 text-white px-3 py-1 rounded-lg text-lg shadow">🔴 Final: {{ $post->final }}</span>
          </div>
        </div>

        <hr>

        <!-- WPA Badge (Centered) -->
        <div class="flex justify-center my-3">
          <span class="bg-purple-600 text-white text-lg px-5 py-2 rounded-lg shadow-md">🎯 WPA: {{ $calculate }}</span>
        </div>

        <!-- Card Footer (Buttons) -->
        <div class="flex justify-between items-center bg-gray-100 p-3 rounded-b-lg">
          <a href="{{ route('posts.edit', $post->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg text-lg shadow hover:bg-blue-700 transition">✏️ Edit</a>
          
          <form action="{{ route('posts.destroy', $post->id) }}" method="post" class="delete-form">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg text-lg shadow hover:bg-red-700 transition delete-btn">
              🗑 Delete
            </button>
          </form>
        </div>

      </div>
    @endforeach
  </div>

  <!-- SweetAlert2 for Delete Confirmation -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      document.querySelectorAll('.delete-form').forEach(form => {
        form.addEventListener('submit', function(event) {
          event.preventDefault();
          Swal.fire({
            title: "🚨 Are you sure?",
            text: "This action cannot be undone!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#ff073a",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Yes, delete it!",
          }).then((result) => {
            if (result.isConfirmed) this.submit();
          });
        });
      });
    });
  </script>

</body>
</html>
