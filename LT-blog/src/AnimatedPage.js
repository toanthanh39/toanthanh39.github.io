import React from "react";
import { motion } from "framer-motion";
const AnimatedPage = ({ children, className = "", ...props }) => {
  const animations = {
    intial: { opacity: 0 },
    animate: { opactity: 1 },
    exit: { opacity: 0 },
  };
  return (
    <motion.div
      {...props}
      variants={animations}
      intial="intial"
      animate="animate"
      exit="exit"
      transition={{ duration: 0.3, ease: "easeInOut" }}
      className={className}
    >
      {children}
    </motion.div>
  );
};

export default AnimatedPage;
