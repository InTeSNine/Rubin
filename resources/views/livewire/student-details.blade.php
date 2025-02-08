<div class="p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-xl font-semibold mb-4">جزئیات دانشجو</h2>
    <p><strong>نام:</strong> {{ $student['name'] }}</p>
    <p><strong>ایمیل:</strong> {{ $student['email'] }}</p>
    <p><strong>مهارت‌ها:</strong> {{ $student['skills'] }}</p>

    <button wire:click="backToList" class="bg-gray-500 text-white px-4 py-2 rounded-lg mt-3">بازگشت</button>
</div>
