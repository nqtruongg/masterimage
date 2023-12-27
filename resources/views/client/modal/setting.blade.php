<div id="setting-modal" tabindex="-1" aria-hidden="true"
     class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

            <div class="px-6 py-6">
                <label for="medium-range" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quality</label>
                <div class="range-container">
                    <input id="medium-range" type="range" value="80" class="w-full h-2 mb-6 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                    <span id="range-value" class="range-value text-blue-600 font-semibold">80%</span>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var rangeInput = document.getElementById("medium-range");
    var rangeValue = document.getElementById("range-value");

    rangeInput.addEventListener("input", function() {
        var value = rangeInput.value;
        rangeValue.textContent = value + "%";
    });
</script>
