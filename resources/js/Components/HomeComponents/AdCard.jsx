import React from "react";
import { IoLocationOutline } from "react-icons/io5";

const AdCard = () => {
  return (
    <div className="flex flex-col overflow-hidden bg-white rounded-lg shadow-md hover:cursor-pointer">
      <div className="w-full h-60">
        <img
          className="object-cover w-full h-full"
          src="https://via.placeholder.com/600/54176f"
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
