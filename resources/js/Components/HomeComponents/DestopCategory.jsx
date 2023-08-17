import React from "react";
import DestopCategoryItem from "./DestopCategoryItem";
import { AiOutlineCar } from "react-icons/ai";
import { BsPhone } from "react-icons/bs";
import { IoHomeOutline } from "react-icons/io5";
import { AiOutlineLaptop } from "react-icons/ai";
import { CgClapperBoard } from "react-icons/cg";

const DestopCategory = () => {
  return (
    <div className="w-[300px] hidden lg:block sticky top-20 bg-white max-h-[80vh] overflow-x-auto">
      <div className="flex flex-col justify-center w-full gap-2 p-2 mt-2">
        <DestopCategoryItem
          title="Mobile phones & Tablets"
          subTiltle="2,000"
          icon={<BsPhone size={25} className="text-gray-600" />}
        />
        <DestopCategoryItem
          title="Vehicle"
          subTiltle="200"
          icon={<AiOutlineCar size={25} className="text-gray-600" />}
        />
        <DestopCategoryItem
          title="House & Property"
          subTiltle="200"
          icon={<IoHomeOutline size={25} className="text-gray-600" />}
        />
        <DestopCategoryItem
          title="Electronics"
          subTiltle="200"
          icon={<CgClapperBoard size={25} className="text-gray-600" />}
        />
        <DestopCategoryItem
          title="Laptop & Computers"
          subTiltle="200"
          icon={<AiOutlineLaptop size={25} className="text-gray-600" />}
        />
        <DestopCategoryItem
          title="Home Furniture & Appliances"
          subTiltle="200"
          icon={<AiOutlineLaptop size={25} className="text-gray-600" />}
        />
      </div>
    </div>
  );
};

export default DestopCategory;
