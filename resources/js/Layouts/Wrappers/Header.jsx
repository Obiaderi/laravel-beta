import { Link } from "@inertiajs/react";
import { BsSearch } from "react-icons/bs";
import { FaUserInjured } from "react-icons/fa";

const Header = () => {
    return (
        <header className="fixed top-0 z-10 w-full shadow-lg bg-primary-violet">
            <div className="py-3 container-fluid">
                <div className="flex items-center justify-between">
                    <Link
                        href="/"
                        className="px-2 py-1 text-2xl font-bold tracking-tighter text-white duration-300 cursor-pointer hover:text-slate-50"
                    >
                        MarketPlace
                    </Link>
                    <div className="pr-2 hover:cursor-pointer">
                        <FaUserInjured
                            size={40}
                            className="p-2 text-white border rounded-full lg:hidden"
                        />
                    </div>

                    <div className="hidden lg:block w-[40%]">
                        <div className="flex items-center w-full gap-2 pl-4 bg-[#fbfaff] rounded-md">
                            <BsSearch size={20} className="text-slate-400" />
                            <input
                                className="w-full px-2 py-2 bg-transparent border-none outline-none"
                                type="text"
                                placeholder="Search"
                            />
                        </div>
                    </div>
                    <div className="items-center hidden gap-4 lg:flex text-primary-violet400">
                        <div className="flex items-center gap-2">
                            <Link href="#">Login</Link>
                            <Link
                                className="px-2 border-l-2 border-lime-primary-violet400"
                                href="#"
                            >
                                Register
                            </Link>
                        </div>
                        <Link
                            className="px-4 py-2 transition-all duration-300 border rounded-lg border-primary-violet200 hover:bg-primary-violet200 hover:text-primary-violet"
                            href="#"
                        >
                            Start Selling
                        </Link>
                    </div>
                </div>
            </div>
        </header>
    );
};

export default Header;
