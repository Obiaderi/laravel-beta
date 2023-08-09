import Footer from "./Wrappers/Footer";
import Header from "./Wrappers/Header";

const ContainerWrapper = ({ children, className }) => {
    return (
        <>
            <Header />
            <div className={`${className} w-full min-h-screen pt-14`}>
                {children}
            </div>
            <Footer />
        </>
    );
};

export default ContainerWrapper;
