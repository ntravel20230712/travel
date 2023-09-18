<input type="time" class="form-control" id="starttime" name='att_Starttime' placeholder="00:00:00" value="" required oninput="validateTime(this)">

<script>
function validateTime(input) {
    // 取得時間的小時和分鐘
    let timeParts = input.value.split(':');
    let hour = parseInt(timeParts[0]);
    let minute = parseInt(timeParts[1]);

    // 檢查分鐘是否為15的倍數
    if (minute % 15 !== 0) {
        // 若不是，則校正到最接近的15的倍數
        minute = Math.round(minute / 15) * 15;
        if (minute === 60) {
            minute = 0;
            hour++;
            if (hour === 24) {
                hour = 0;
            }
        }
        // 更新時間輸入框的值
        input.value = `${String(hour).padStart(2, '0')}:${String(minute).padStart(2, '0')}`;
    }
}
</script>
