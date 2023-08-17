/* eslint-disable react/no-unescaped-entities */
import React from "react";

const Footer = () => {
    return (
        <div className="w-full pt-10 bg-primary-violet200">
            <div className="flex px-10 lg:px-[131px] flex-wrap justify-between w-full mb-10 gap-y-4">
                <div className="w-[50%] md:w-[30%] lg:w-[15%] flex flex-col gap-y-2 mb-4">
                    <p className="font-bold text-[16px] leading-[31px] ">
                        Company
                    </p>
                    <p className="text-txWhite font-medium text-[13px] leading-[25px] ">
                        Who we are
                    </p>
                    <p className="text-txWhite font-medium text-[13px] leading-[25px] ">
                        Countries
                    </p>
                    <p className="text-txWhite font-medium text-[13px] leading-[25px] ">
                        News & Blog
                    </p>
                    <p className="text-txWhite font-medium text-[13px] leading-[25px] ">
                        Careers
                    </p>
                    <p className="text-txWhite font-medium text-[13px] leading-[25px] ">
                        Partners
                    </p>
                </div>
                <div className="w-[50%] md:w-[30%] lg:w-[15%] flex flex-col gap-y-2">
                    <p className="font-bold text-[16px] leading-[31px] ">
                        Legal
                    </p>
                    <p className="text-txWhite font-medium text-[13px] leading-[25px] ">
                        Data Privacy Policy
                    </p>
                    <p className="text-txWhite font-medium text-[13px] leading-[25px] ">
                        Cookie Policy
                    </p>
                    <p className="text-txWhite font-medium text-[13px] leading-[25px] ">
                        Regulation
                    </p>
                    <p className="text-txWhite font-medium text-[13px] leading-[25px] ">
                        Careers
                    </p>
                    <p className="text-txWhite font-medium text-[13px] leading-[25px] ">
                        Partners
                    </p>
                </div>
                <div className="w-[100%] md:w-[30%] lg:w-[15%] flex flex-col mb-4 gap-y-2">
                    <p className="font-bold text-[16px] leading-[31px] ">
                        Support
                    </p>
                    <p className="text-txWhite font-medium text-[13px] leading-[25px] ">
                        FAQs
                    </p>
                    <p className="text-txWhite font-medium text-[13px] leading-[25px] ">
                        Contact Us
                    </p>
                    <p className="text-txWhite font-medium text-[13px] leading-[25px] ">
                        Terms & Conditions
                    </p>
                    <p className="text-txWhite font-medium text-[13px] leading-[25px] ">
                        Privacy Policy
                    </p>
                </div>
                <div className="w-[100%] text-txWhite lg:w-[40%] lg:flex flex flex-col gap-2">
                    <p className="font-bold text-[16px] leading-[31px] ">
                        Let's Connect
                    </p>
                    <p className=" font-medium text-[13px] leading-[25px] ">
                        Stay up-to-date with the latest news, features, and
                        updates from MarketPlace follow us on social media
                        today!
                    </p>
                    <div className="flex justify-between w-4/12">
                        <img src="/icons/twitter.svg" className="" alt="" />
                        <img src="/icons/linkedin.svg" className="" alt="" />
                        <img src="/icons/mem.svg" className="" alt="" />
                        <img src="/icons/fb.svg" className="" alt="" />
                    </div>
                    <p className="font-normal mt-[60px] text-[10px] lg:text-[12px] leading-[22px] lg:leading-[26px] ">
                        MarketPlace is not a financial institution and does not
                        provide financial advice. platform is intended to assist
                        with HR management for remote businesses and is not
                        intended as a substitute for legal or financial advice.
                        Please consult with your own legal and financial
                        advisors before making any decisions related to your
                        business operations.
                    </p>
                </div>
            </div>
            <div className="flex items-center justify-center w-full py-3 bg-primary-violet100">
                <span>Copyright © 2023 All rights reserved</span>
            </div>
        </div>
    );
};

export default Footer;
