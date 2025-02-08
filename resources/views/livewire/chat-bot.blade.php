<div class="p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-xl font-semibold mb-4">چت با روبین</h2>
    <input type="text" wire:model="question" placeholder="سوال خود را بپرسید..." class="border p-2 w-full">
    <button wire:click="ask" class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-3">ارسال</button>

    <p class="mt-4"><strong>پاسخ:</strong> {{ $answer }}</p>
</div>
