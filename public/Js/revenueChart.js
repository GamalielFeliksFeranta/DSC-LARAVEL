document.addEventListener("DOMContentLoaded", function () {
    var ctx = document.getElementById("revenueChart").getContext("2d");
    var revenueChart = new Chart(ctx, {
        type: "line",
        data: {
            labels: ["2019", "2020", "2021", "2022", "2023", "2024"],
            datasets: [
                {
                    label: "Revenue",
                    data: [
                        5000000, 20000000, 15000000, 25000000, 22000000,
                        29000000,
                    ],
                    borderColor: "#594d97",
                    borderWidth: 1,
                    fill: false,
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
            plugins: {
                legend: {
                    labels: {
                        font: {
                            family: "Poppins",
                            size: 14,
                        },
                    },
                },
            },
        },
    });
});
