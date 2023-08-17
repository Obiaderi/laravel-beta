const MobileCategory = ({ icon, title }) => {
  return (
    <div className="flex flex-col items-center justify-center gap-2 py-4 bg-white">
      {icon}
      <span className="text-xs font-semibold">{title}</span>
    </div>
  );
};

export default MobileCategory;
