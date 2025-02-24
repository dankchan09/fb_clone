document.addEventListener("DOMContentLoaded", function() {
    const ctx = document.getElementById('myChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Bài viết', 'Người dùng'],
            datasets: [{
                label: 'Số lượng',
                data: [12, 8], // Thay số liệu bằng PHP nếu cần
                backgroundColor: ['#3498db', '#e74c3c']
            }]
        },
        options: {
            responsive: true
        }
    });
});
