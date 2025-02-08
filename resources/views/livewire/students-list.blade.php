<div class="p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-xl font-semibold mb-4">لیست دانشجویان</h2>
    <table class="table-auto w-full border-collapse border border-gray-200">
        <thead>
            <tr>
                <th class="border px-4 py-2">نام</th>
                <th class="border px-4 py-2">ایمیل</th>
                <th class="border px-4 py-2">مشاهده</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td class="border px-4 py-2">{{ $student['name'] }}</td>
                <td class="border px-4 py-2">{{ $student['email'] }}</td>
                <td class="border px-4 py-2">
                    <button class="bg-green-500 text-white px-3 py-1 rounded"
                        wire:click="viewStudent({{ $student['id'] }})">
                        مشاهده
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
