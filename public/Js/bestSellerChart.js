document.addEventListener("DOMContentLoaded", function () {
    const labels = [
        "Product A",
        "Product B",
        "Product C",
        "Product D",
        "Product E",
        "Product F",
        "Product G",
    ];
    const data = {
        labels: labels,
        datasets: [
            {
                axis: "y",
                label: "Best Seller Product",
                data: [72, 68, 55, 50, 45, 40, 35],
                fill: false,
                backgroundColor: [
                    "rgb(255, 99, 132)",
                    "rgb(255, 159, 64)",
                    "rgb(255, 205, 86)",
                    "rgb(75, 192, 192)",
                    "rgb(54, 162, 235)",
                    "rgb(153, 102, 255)",
                    "rgb(201, 203, 207)",
                ],
                borderColor: [
                    "rgb(255, 99, 132)",
                    "rgb(255, 159, 64)",
                    "rgb(255, 205, 86)",
                    "rgb(75, 192, 192)",
                    "rgb(54, 162, 235)",
                    "rgb(153, 102, 255)",
                    "rgb(201, 203, 207)",
                ],
                borderWidth: 1,
            },
        ],
    };

    const ctx = document.getElementById("bestSellerChart").getContext("2d");

    new Chart(ctx, {
        type: "bar",
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            indexAxis: "y",
            scales: {
                x: {
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
