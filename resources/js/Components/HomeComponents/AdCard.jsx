import React from "react";
import { IoLocationOutline } from "react-icons/io5";

const AdCard = () => {
    return (
        <div className="flex flex-col overflow-hidden bg-white rounded-lg shadow-md hover:cursor-pointer">
            <div className="w-full h-60">
                <img
                    className="object-cover w-full h-full"
                    src="https://images.unsplash.com/photo-1591337676887-a217a6970a8a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1780&q=80"
                    alt="products"
                />
            </div>
            <div className="flex flex-col p-2 pt-4 leading-4 text-[14px]">
                <span className="font-semibold tracking-tighter">
                    Lexus ES 350 2008 Black
                </span>
                <div className="flex items-center text-[10px]">
                    <IoLocationOutline className="inline-block mr-1" />
                    <span className="italic">Abuja, Lagos</span>
                </div>
                <span className="font-semibold tracking-wide text-primary-violet">
                    N5,000,000
                </span>
            </div>
        </div>
    );
};

export default AdCard;
