<div>
    <div class="bg-gray-900 text-white min-h-screen flex items-center" style="scroll-snap-align: start;">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col items-center gap-8">
                <div class="flex flex-col items-center gap-4">
                    <h1 class="text-6xl text-indigo-600">420</h1>
                    <p>Возникла ошибка :(</p>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gray-900 text-white flex items-center">
        <div class="max-w-7xl mx-auto pb-[100px]">
            <div class="flex flex-col border border-white p-8 rounded gap-7">
                <?php
                foreach ($data as $error) {?>
                    <div class="flex flex-col bg-red-500 p-8 rounded gap-2">
                        <p>Сообщение: <?=$error['message']?></p>
                        <p>Ошибка: <?=$error['error_message']?></p>
                        <p>Тип: <?=strtoupper($error['type'])?></p>
                    </div>
                <?php }
                ?>
            </div>
        </div>
    </div>
</div>