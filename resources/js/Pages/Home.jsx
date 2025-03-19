import { useState } from "react";

export default function Home() {

    const [counter, setCounter] = useState(0);

    return (
        <div className="h-screen flex justify-center items-center gap-7">

            <button onClick={() => setCounter(counter + 1)} className={`${styles.btn} ${styles.btn_success}`}>+</button>
            <span className={styles.text}>{counter}</span>
            <button onClick={() => setCounter(counter + -1)} className={` ${styles.btn} ${styles.btn_danger} `}>-</button>
        </div>
    );
}



const styles = {
    btn: 'px-4 py-1 rounded-md shadow-md text-white text-xl font-bold',
    btn_success: 'bg-green-600',
    btn_danger: 'bg-red-600',
    text: 'text-3xl font-black p-2'
}