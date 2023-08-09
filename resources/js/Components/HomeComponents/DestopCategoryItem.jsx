import { RxCaretRight } from "react-icons/rx";

const DestopCategoryItem = ({ title, subTiltle, icon }) => {
  return (
    <div className="flex items-center justify-between cursor-pointer">
      <div className="flex items-center gap-3">
        {icon}
        <div className="flex flex-col text-[14px] justify-center font-semibold leading-tight">
          <span>{title}</span>
          <span className="text-gray-400">{subTiltle}</span>
        </div>
      </div>

      <div className="">
        <RxCaretRight className="text-grayishBlue" size={25} />
      </div>
    </div>
  );
};

export default DestopCategoryItem;
