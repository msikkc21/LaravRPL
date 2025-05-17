import React, { useState } from "react";
import ReactDOM from "react-dom/client";
import { Line } from "react-chartjs-2";
import Chart from "chart.js/auto";

function App() {
    const [count, setCount] = useState(0);
    const [name, setName] = useState("");
    const [message, setMessage] = useState("");

    const increment = () => setCount(count + 1);
    const decrement = () => setCount(count - 1);
    const reset = () => setCount(0);

    const handleSubmit = (e) => {
        e.preventDefault();
        setMessage(`Halo.., ${name}! Selamat Datang di LaravRPLKu!`);
    };

    const data = {
        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        datasets: [
            {
                label: "Sales in 2025",
                data: [30, 55, 40, 45, 70, 75, 60, 80, 90, 100, 120, 130, 140],
                borderColor: "rgba(75,192,192,1)",
                tension: 0.1,
            },
        ],
    };

    return (
        <div className="container mx-auto my-10">
            <h1 className="font-bold text-center text-4xl">
                Laravel With ReactJs
            </h1>

            {/* Counter Section */}
            <div className="text-center my-10 flex flex-col items-center justify-center">
                <h1 className="font-semibold text-2xl">Counter</h1>
                <div className="flex items-center justify-center gap-5">
                    <button
                        onClick={decrement}
                        className="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-400 transition-all duration-300 cursor-pointer"
                    >
                        −
                    </button>
                    <p className="font-semibold text-3xl bg-slate-300 px-5 py-2 my-2 rounded-xl">
                        {count}
                    </p>
                    <button
                        onClick={increment}
                        className="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-400 transition-all duration-300 cursor-pointer"
                    >
                        +
                    </button>
                </div>
                <button
                    onClick={reset}
                    className="bg-yellow-500 text-white px-4 py-1 rounded-lg hover:bg-yellow-400 transition-all duration-300 cursor-pointer"
                >
                    Reset
                </button>
            </div>

            <hr />

            {/* Form Section */}
            <form
                onSubmit={handleSubmit}
                className="flex items-center justify-start gap-5 my-5"
            >
                <label className="font-medium text-lg">
                    Nama :
                    <input
                        className="border-2 border-gray-300 rounded-lg px-2 ml-2"
                        placeholder="Masukkan Nama"
                        type="text"
                        value={name}
                        onChange={(e) => setName(e.target.value)}
                    />
                </label>
                <button
                    className="bg-blue-500 text-white px-4 py-1 rounded-lg hover:bg-blue-400 transition-all duration-300 cursor-pointer"
                    type="submit"
                >
                    Submit
                </button>
            </form>
            {message && <p className="text-lg font-medium mb-4">{message}</p>}

            <hr />

            {/* Chart Section */}
            <div className="py-5">
                <h3 className="text-center font-bold text-2xl">Sales Data</h3>
                <div className="w-3/4 my-5 mx-auto">
                    <Line data={data} />
                </div>
            </div>
        </div>
    );
}

const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(<App />);
