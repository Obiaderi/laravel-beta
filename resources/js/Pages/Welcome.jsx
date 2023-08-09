import ContainerWrapper from "@/Layouts/ContainerWrapper";
import { Head } from "@inertiajs/react";
import { BsSearch } from "react-icons/bs";
import { BsPlusCircleFill } from "react-icons/bs";
import { BsCarFront } from "react-icons/bs";
import { FcHome } from "react-icons/fc";
import { FaChair } from "react-icons/fa";
import { GiLaptop } from "react-icons/gi";
import { FaMobileAlt } from "react-icons/fa";
import MobileCategory from "@/Components/HomeComponents/MobileCategory";
import DestopCategory from "@/Components/HomeComponents/DestopCategory";
import AdCard from "@/Components/HomeComponents/AdCard";

export default function Welcome() {
    return (
        <ContainerWrapper className="bg-primary-violet400">
            <Head title="Welcome" />
            <section className="bg-primary-violet w-full h-[20vh] lg:h-[20vh] mb-4">
                <div className="flex items-center justify-center w-full h-full container-fluid">
                    <div className="flex flex-col items-center justify-end w-full h-full gap-3 p-1">
                        <div className="flex items-center gap-3 text-white lg:mb-14">
                            <span>Find Anything in </span>
                            <span>Nigeria </span>
                        </div>
                        <div className="w-full mb-10 lg:hidden">
                            <div className="flex items-center w-full gap-2 pl-4 bg-[#fbfaff] rounded-md">
                                <BsSearch
                                    size={20}
                                    className="text-slate-400"
                                />
                                <input
                                    className="w-full px-2 py-3 bg-transparent border-none outline-none"
                                    type="text"
                                    placeholder="Search"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section className="grid grid-cols-3 gap-4 mb-4 container-fluid md:hidden sm:grid-cols-4">
                <MobileCategory
                    icon={
                        <BsPlusCircleFill size={40} className="text-softRed" />
                    }
                    title="Post ad"
                />
                <MobileCategory
                    icon={<BsCarFront size={40} className="text-softRed" />}
                    title="Cars"
                />
                <MobileCategory
                    icon={<FcHome size={40} className="text-softRed" />}
                    title="Property"
                />
                <MobileCategory
                    icon={<FaChair size={40} className="text-softRed" />}
                    title="Furniture"
                />
                <MobileCategory
                    icon={<GiLaptop size={40} className="text-softRed" />}
                    title="Electronics"
                />
                <MobileCategory
                    icon={<FaMobileAlt size={40} className="text-softRed" />}
                    title="SmartPhones"
                />
            </section>
            <section className="flex justify-between container-fluid">
                <DestopCategory />
                <div className="flex-1 ml-4">
                    <div className="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4">
                        <AdCard />
                        <AdCard />
                        <AdCard />
                        <AdCard />
                        <AdCard />
                        <AdCard />
                        <AdCard />
                        <AdCard />
                        <AdCard />
                        <AdCard />
                        <AdCard />
                        <AdCard />
                        <AdCard />
                    </div>
                </div>
            </section>
            <div className="w-full mt-6">
                <div className="flex items-center justify-center w-full px-4 font-semibold bg-white h-40">
                    Place your Banner Here
                </div>
            </div>
        </ContainerWrapper>
    );
}
